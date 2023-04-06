<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\service;
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
        $noOfProduct = $user->products()->get()->count();
        $noOfService = $user->services()->get()->count();

      return view('Admin.managestaffaccess.manage',['posts'=>$user,'cService'=>$cService,'cProduct'=>$cProduct,'noS'=>$noOfService,'noP'=>$noOfProduct]);
    }

    public function processAssign($userid,Request $request)
    {
        $products = new product;
        $services = new service;
        $user = User::findorFail($userid);

        $user->products()->detach();
        $user->services()->detach();

        if($request->has('products'))
        {
            $prodArray = $request->input('products');
            foreach ($prodArray as $item)
            {
                $user->products()->attach($prodArray);
            }
        }


        if($request->has('services'))
        {

            $servArray = $request->input('services');
            foreach($servArray as $item)
            {
                $user->services()->attach($servArray);
            }
        }

        return redirect('/user');
    }
}
