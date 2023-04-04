<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class accessController extends Controller
{
    public function assignForm($userId)
    {
        // kita assign ps dekat specific user
        $user = User::findorFail($userId); 

        return view('Admin.managestaffaccess.manage',['posts'=>$user]);
    }

    public function processAssign()
    {


        return 0;
    }
}
