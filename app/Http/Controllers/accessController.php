<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\User;

class accessController extends Controller
{
    public function assignForm($userId)
    {
        // kita assign ps dekat specific user
        $user = User::findorFail($userId);
        $cService = category::where('role','=','Service')->get();
        $cProduct = category::where('role','=','Product')->get();

        return view('Admin.managestaffaccess.manage',['posts'=>$user,'cService'=>$cService,'cProduct'=>$cProduct]);
    }

    public function processAssign()
    {


        return 0;
    }
}
