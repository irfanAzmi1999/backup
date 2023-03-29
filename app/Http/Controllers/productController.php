<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $picture->storeAs('public/images/product_category/'.$category->id.'/image',$picture->getClientOriginalName());
        Session::flash('message','New Product Category Added');
        return redirect()->route('productCat');
    }

    public function viewUpdateForm($id)
    {
        $p = category::findorFail($id);
        return view('Admin.manageproduct.updateProductCategoryForm',['posts'=>$p]);
    }

    public function update(Request $request,$id)
    {
        $catP = category::findorFail($id);
        $catP->name = $request->input('name');

        if($request->input('catProductImage')!=null)
        {
            $image = $request->file('catProductImage');
            $catP->image = $request->file('catProductImage')->getClientOriginalName();
            $image->storeAs('public/images/product_category/'.$catP->id.'/image',$image->getClientOriginalName());
        }
        $catP->save();

        //Process bullets
        //Delete existing bullets
        bullet::where('category_id','=',$id)->delete();

        $b = $request->input('bullet');

        foreach ($b as $key=>$bullet)
        {
            $dbBullet = new bullet;
            $dbBullet->content = $bullet;
            $catP->bullets()->save($dbBullet);
        }

        Session::flash('message','Product Category Updated');
        return redirect()->route('productCat');
    }

    public function destroyProductCategory($id)
    {
        $catProduct = category::findorFail($id);
        $catProduct->delete();

        Session::flash('message','Product Category Deleted Successfully');
        return redirect()->route('productCat');
    }

    public function viewProductCategory($id)
    {
        $pcat = category::findorFail($id);
        return view('Admin.manageproduct.viewProductCategory',['posts'=>$pcat]);
    }

}
