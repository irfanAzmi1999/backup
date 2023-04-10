<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\service;
use App\Models\technical_paper;
use Illuminate\Http\Request;

class paperController extends Controller
{
    public function listPaper($type,$id)
    {
        $p = null;
        $tp = null;
        if($type=='product')
        {
            $p = product::findorFail($id);
            $tp = technical_paper::where('product_id','=',$id);
        }

        if($type=='service')
        {
            $p = service::findorFail($id);
            $tp = technical_paper::where('service_id','=',$id);
        }
        return view('Admin.technical_paper.paperList',['type'=>$p,'posts'=> $tp]);
    }

    public function addPaperForm() //Display Form
    {
        return view('Admin.technical_paper.addPaper');
    }

    public function addPaper(Request $request,$type,$id)
    {

    }



}
