<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use App\Models\category;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function showProductCategory()
    {
        $productCategory = category::where('role','=','product')->get();
        return view('Admin.manageproduct.productCatList',['posts'=>$productCategory]);
    }


    //Show category add form
    public function addProductCategory()
    {
        return view('Admin.manageproduct.addProductCat');
    }

    //Save product category in database
    public function createProductCategory(Request $data)
    {
        $picture=$data->file('catProductImage');
        $bullets = $data->input('bullet');

        $category = new category;
        $category->name = $data->input('name');
        $category->role = $data->input('role');
        $category->image = $picture->getClientOriginalName();
        $category->save();

        foreach($bullets as $key=>$item)
        {
            $b = new bullet;
            $b->content = $item;
            $category->bullets()->save($b);
        }

        $picture->storeAs('public/images/product/'.$category->name.'/image',$picture->getClientOriginalName());
        return redirect()->route('productCat');
    }

}
