<?php

namespace App\Http\Controllers;

use App\Models\benefit;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class _productController extends Controller
{
    public function showProductList($id)
    {
        $product = product::where('category_id','=',$id)->get();
        return view('Admin.manageproduct.productList',['posts'=>$product,'cat'=>category::findorFail($id)]);
    }

    public function showAddProductForm($id)
    {
        $category = category::findorFail($id);
        return view('Admin.manageproduct.addnewProduct',['posts'=>$category]);
    }

//    add new product
    public function addNewProduct(Request $request)
    {
        $product = new product;
        $product->name = $request->input('name');
        $product->productImage = $request->file('productImage')->getClientOriginalName();
        $product->description = $request->input('productdescription');
        $product->category_id = $request->input('categoryID');


        if($request->file('principle_logo')!=null)
        {
            $productPrinciple = $request->file('principle_logo');
            $product->principleLogo = $productPrinciple->getClientOriginalName();
        }
        $product->save();

        $benefits = $request->input('benefits');
        foreach ($benefits as $key=>$item)
        {
            $b = new benefit;
            $b->title = $item;
            $b->description = $request->input('benefitDescription')[$key];
            $b->role = 'Products';
            $product->benefits()->save($b);
        }

        return redirect()->route('listofProduct',[$request->input('categoryID')]);


    }
}
