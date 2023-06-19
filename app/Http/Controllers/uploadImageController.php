<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadImageController extends Controller
{
    public function storeTextEditorImage()
    {
//        $imgpath = request()->file('file')->store('uploads', 'public');
        Storage::disk('spaces')->putFileAs('uploads',request()->file('file'),request()->file('file')->getClientOriginalName(),'public');
        return response()->json(['location'=> env('DO_SPACES_ENDPOINT')."/uploads/".request()->file('file')->getClientOriginalName()]);
    }
}
