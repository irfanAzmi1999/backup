<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\service;
use App\Models\technical_paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class paperController extends Controller
{
    public function listPaper($type,$id)
    {
        $p = null;
        $tp = null;
        if($type=='product')
        {
            $p = product::findorFail($id);
            $tp = technical_paper::where('product_id','=',$id)->get();
        }

        if($type=='service')
        {
            $p = service::findorFail($id);
            $tp = technical_paper::where('service_id','=',$id)->get();
        }
        return view('Admin.technical_paper.paperList',['type'=>$p,'posts'=> $tp,'role'=>$type]);
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
            $product->technical_papers()->save($paper);
            $fileData->storeAs('public/document/technical_papers/'.$paper->id,$fileData->getClientOriginalName());
        }

        if($type=='service')
        {
            $service = service::findorFail($id);
            $paper = new technical_paper;
            $paper->title = $title;
            $paper->filename = $fileData->getClientOriginalName();
            $service->technical_papers()->save($paper);
            $fileData->storeAs('public/document/technical_papers/'.$paper->id,$fileData->getClientOriginalName());
        }

        Session::flash('message','Technical Paper Added');
        return redirect()->route('listPaper',[$type,$id]);
    }

    public function deletePaper(Request $request,$type,$id,$psID)
    {
        $paper = technical_paper::findorFail($id);
        $paper->delete();

        Session::flash('message','Technical Paper Deleted');
        return redirect()->route('listPaper',[$type,$psID]);

    }


}
