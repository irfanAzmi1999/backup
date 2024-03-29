<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use App\Models\product;
use App\Models\service;
use App\Models\technical_paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class paperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'addPaper'
        ]);
    }

    public function listPaper($type,$id)
    {
        $p = null;
        $tp = null;
        $access = null;
        if($type=='product')
        {
            $p = product::findorFail($id);
            $tp = technical_paper::where('product_id','=',$id)->get();

            foreach ($tp as $item) {
                foreach ($item->product->users as $ee) {
                    if (Auth::user()->id == $ee->id) {
                        $access = true;
                        break;
                    } else {
                        $access = false;
                    }
                }
            }
        }

        if($type=='service')
        {
            $p = service::findorFail($id);
            $tp = technical_paper::where('service_id','=',$id)->get();

            foreach ($tp as $item) {
                foreach ($item->service->users as $ee) {
                    if (Auth::user()->id == $ee->id) {
                        $access = true;
                        break;
                    } else {
                        $access = false;
                    }
                }
            }
        }
        return view('Admin.technical_paper.paperList',['type'=>$p,'posts'=> $tp,'role'=>$type,'access'=>$access]);
    }



    public function addPaper(Request $request,$type,$id)
    {
        $fileData = $request->file('paper');
        $title = $request->input('name');
        if($type=='product')
        {
            $product = product::findorFail($id);
            $paper = new technical_paper;
            $paper->title =$title;
            $paper->filename=$fileData->getClientOriginalName();
            $paper->filesize = $fileData->getSize()/1024;
            $product->technical_papers()->save($paper);
            $fileData->storeAs('public/document/technical_papers/'.$paper->id,$fileData->getClientOriginalName());
        }

        if($type=='service')
        {
            $service = service::findorFail($id);
            $paper = new technical_paper;
            $paper->title = $title;
            $paper->filename = $fileData->getClientOriginalName();
            $paper->filesize = $fileData->getSize()/1024;
            $service->technical_papers()->save($paper);
            $fileData->storeAs('public/document/technical_papers/'.$paper->id,$fileData->getClientOriginalName());
        }

        Session::flash('message','Technical Paper Added');

        LogActivity::addToLog('Technical Paper Added :'.$title);
        return redirect()->route('listPaper',[$type,$id]);
    }

    public function updatePaper(Request $request,$type,$id)
    {
        $file = $request->file('paper');
        $paper = technical_paper::findorFail($id);
        $paper->title = $request->input('name');
        $paper->filename = $file->getClientOriginalName();
        $paper->save();

        $file->storeAs('public/document/technical_papers/'.$paper->id,$file->getClientOriginalName());
        LogActivity::addToLog('Technical Paper Updated : '.$request->input('name'));

        Session::flash('message','Technical Paper Updated ');
        return redirect()->route('listPaper',[$type,$id]);
    }

    public function deletePaper(Request $request,$type,$id,$psID)
    {
        $paper = technical_paper::findorFail($id);
        $paper->delete();

        Session::flash('message','Technical Paper Deleted');

        LogActivity::addToLog('Technical Paper Removed :'.$paper->title);
        return redirect()->route('listPaper',[$type,$psID]);

    }


}
