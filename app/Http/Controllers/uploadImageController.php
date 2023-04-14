<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImageController extends Controller
{
    public function storeTextEditorImage()
    {
        $imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location'=> "/storage/$imgpath"]);
    }
}
