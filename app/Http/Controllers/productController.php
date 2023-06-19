<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use App\Models\bullet;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'viewUpdateForm'
        ]);
    }


    public function showProductCategory()
    {
        $productCategory = category::where('role','=','product')->orderBy('index','asc')->get();
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

        $totalIndex = category::max('index');


        $category = new category;
        $category->name = $data->input('name');
        $category->role = $data->input('role');
        $category->image = $picture->getClientOriginalName();
        $category->index = $totalIndex+1;
        $category->save();

        foreach($bullets as $key=>$item)
        {
            $b = new bullet;
            $b->content = $item;
            $category->bullets()->save($b);
        }

//        $picture->store('uploads','spaces');
       $test = Storage::disk('spaces')->putFileAs('public/images/product_category/'.$category->id.'/image',$picture,$picture->getClientOriginalName(),'public');

        Session::flash('message','New Product Category Added');

        LogActivity::addToLog('Add Product Category :'.$category->name);
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

        if($request->file('catProductImage')!=null)
        {
            $image = $request->file('catProductImage');
            $catP->image = $request->file('catProductImage')->getClientOriginalName();
            $test = Storage::disk('spaces')->putFileAs('public/images/product_category/'.$catP->id.'/image',$image,$image->getClientOriginalName(),'public');
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

        LogActivity::addToLog('Update Product Category ID :'.$catP->name);
        return redirect()->route('productCat');
    }

    public function destroyProductCategory($id)
    {
        $catProduct = category::findorFail($id);
        $catProduct->delete();

        Session::flash('message','Product Category Deleted Successfully');

        LogActivity::addToLog('Remove Product Category :'.$catProduct->name);
        return redirect()->route('productCat');
    }

    public function viewProductCategory($id)
    {
        $pcat = category::findorFail($id);
        return view('Admin.manageproduct.viewProductCategory',['posts'=>$pcat]);
    }

    public function viewReorderCatPage()
    {
        $product = category::orderBy('index','asc')->get();
        return view('Admin.manageproduct.reorderProductCat',['posts'=>$product]);
    }

    public function reorderCat(Request $request)
    {

        echo "list of category:";
        $catOrder = $request->input('categoryOrder');
        $catID = $request->input('categoryID');

        $newIndex=1;
        foreach($catID as $key=>$items)
        {
            $category = category::where('id','=',$items)->orderBy('index','asc')->get();
            if($category == true)
            {
                $category->update(['index'=>$newIndex]);
                $newIndex++;
            }
        }
        return redirect()->route('productCat');
    }

}
