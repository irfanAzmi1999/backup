<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use App\Models\benefit;
use App\Models\category;
use App\Models\product;
use App\Models\technical_paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class _productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'showAddProductForm',
            'showProductList',
            'addNewProduct',
            'displayUpdateForm',
            'updateProduct'
        ]);
    }

    public function showProductList($id)
    {

            $product = product::where('category_id','=',$id)->orderBy('index','asc')->get();


//        if(Auth::user()->role == 'staff')
//        {
//            $product =  product::with('users')->where('category_id','=',$id)->get();
//        }

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

        $image = null;
        $imageSecond = null;
        $catID = $request->input('categoryID');

        //calculate index

        $newIndex = product::max('index')+1;

        //get image from request
        if($request->file('productImage'))
        {
            $image = $request->file('productImage');
        }

        if($request->file('productImageSecondLayer'))
        {
            $imageSecond = $request->file('productImageSecondLayer');
        }

//        $image = $request->file('productImage');


        $principleImage = $request->file('principle_logo');

        $product = new product;
        $product->name = $request->input('name');

        if($image != null)
        {
            $product->productImage = $request->file('productImage')->getClientOriginalName();
        }

        $product->additionalDetails = $request->input('textSample');
        // $product->description = $request->input('productdescription');
        $product->category_id = $request->input('categoryID');
        $product->briefDescription = $request->input('productbrieddescription');
        $product->productImageSecond = $imageSecond->getClientOriginalName();
        $product->index = $newIndex;

        if($request->file('principle_logo')!=null)
        {
            $productPrinciple = $request->file('principle_logo');
            $product->principleLogo = $productPrinciple->getClientOriginalName();

        }
        $product->save();

        if($request->file('principle_logo')!=null)
        {
            $productPrinciple->storeAs('public/images/product/'.$product->id.'/principleLogo',$principleImage->getClientOriginalName());
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id.'/principleLogo',
//                $principleImage,$principleImage->getClientOriginalName(),'public');
        }

        // $benefits = $request->input('benefits');

        // foreach ($benefits as $key=>$item)
        // {
        //     $b = new benefit;
        //     $b->title = $item;
        //     $b->description = $request->input('benefitDescription')[$key];
        //     $b->role = 'Products';
        //     $product->benefits()->save($b);
        // }

        //Save image in the server
        if($image != null)
        {
            $request->file('productImage')->storeAs('public/images/product/'.$product->id,$image->getClientOriginalName());
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id,$image,$image->getClientOriginalName(),'public');
        }

        if ($imageSecond != null)
        {
            $imageSecond->storeAs('public/images/product/'.$product->id.'/secondImage',$imageSecond->getClientOriginalName());
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id.'/secondImage',$imageSecond,$imageSecond->getClientOriginalName(),'public');
        }


        LogActivity::addToLog('Add new product :'.$product->name);
        return redirect()->route('listofProduct',[$request->input('categoryID')]);

    }

    public function displayUpdateForm($id)
    {
        $p = product::findorFail($id);
        $c = category::where('role','=','Product')->get();
        return view('Admin.manageproduct.updateProductDetails',['posts'=>$p,'cposts'=>$c]);
    }

    public function updateProduct($id,Request $request)
    {
        // dd($request->textSample);
        $productimagestatus = false;
        $principleimagestatus = false;
        $productSecondImage = false;

        if($request->file('productImage')!=null)
        {
            $productimagestatus = true;
        }

        if($request->file('principle_logo')!=null)
        {
            $principleimagestatus=true;
        }

        if($request->file('productImageSecondLayer')!=null)
        {
            $productSecondImage=true;
        }

        $product = product::findorFail($id);
        $product->name = $request->input('name');
        $product->additionalDetails = $request->input('textSample');
        $product->briefDescription = $request->input('productbrieddescription');

        if($productSecondImage==true)
        {
            $product->productImageSecond = $request->file('productImageSecondLayer')->getClientOriginalName();
        }

        if($productimagestatus==true)
        {
            $product->productImage = $request->file('productImage')->getClientOriginalName();
        }
        // $product->description = $request->input('productdescription');

        if($product->category_id != $request->input('categoryID'))
        {
            $product->category_id = $request->input('categoryID');
        }
        if($principleimagestatus == true)
        {
            $product->principleLogo = $request->file('principle_logo')->getClientOriginalName();
        }

        $product->save();

        // $benefits = benefit::where('product_id','=',$id);
        // $benefits->delete();

        // $bInput = $request->input('benefits');

        // foreach ($bInput as $key => $item)
        // {
        //     $b = new benefit;
        //     $b->title = $item;
        //     $b->description = $request->input('benefitDescription')[$key];
        //     $b->role = 'Products';
        //     $product->benefits()->save($b);
        // }

        if($principleimagestatus==true)
        {
            $request->file('principle_logo')->storeAs('public/images/product/'.$product->id.'/principleLogo',
                $request->file('principle_logo')->getClientOriginalName(),'public');
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id.'/principleLogo',
//                $request->file('principle_logo'),$request->file('principle_logo')->getClientOriginalName(),'public');
        }

        if($productimagestatus==true)
        {
            $request->file('productImage')->storeAs('public/images/product/'.$product->id,
                $request->file('productImage')->getClientOriginalName());
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id,$request->file('productImage'),
//                $request->file('productImage')->getClientOriginalName(),'public');
        }

        if($productSecondImage==true)
        {
            $request->file('productImageSecondLayer')->storeAs('public/images/product/'.$product->id.'/secondImage', $request->file('productImageSecondLayer')->getClientOriginalName());
//            Storage::disk('spaces')->putFileAs('public/images/product/'.$product->id.'/secondImage',
//                $request->file('productImageSecondLayer'),$request->file('productImageSecondLayer')->getClientOriginalName(),'public');
        }

        $currentCat = $request->input('currentCatID');
        Session::flash('message','Product Updated');

        LogActivity::addToLog('Update New Product :'.$product->name);
        return redirect()->route('listofProduct',[$currentCat]);
    }

    public function destroyProduct($id,$catID)
    {

        $product = product::findorFail($id);
        $product->delete();

        Session::flash('message','Product Deleted Successfully');

        LogActivity::addToLog('Removed product :'.$product->name);
        return redirect()->route('listofProduct',[$catID]);
    }

    public function viewProductDetails($id)
    {
        $product = product::findorFail($id);
        return view('Admin.manageproduct.viewproduct',['posts'=>$product]);
    }

    //view all products in public

    public function viewProductBasedOnCategory($categoryID)
    {

        // $product = product::where('category_id','=',$id)->orderBy('index','asc')->get();
        $product = product::where('category_id','=',$categoryID)->orderBy('index','asc')->paginate(6); // sidebar
        $firstProduct = product::where('category_id','=',$categoryID)->first(); // selected product
        $category = category::findorFail($categoryID);

        if($firstProduct != null)
        {
//            $productID = $firstProduct->id;
//            $paper = technical_paper::where('product_id','=',$productID)->get();
//            return view('public_product.product',['posts'=>$product,'cposts'=>$category,'selected'=>$firstProduct,'paper'=>$paper]);
            return view('public_product/listofProduct',['posts'=>$product,'category'=>$category]);
        }
        else{
            echo '<script>';
            echo 'alert("No product Found");';
            echo 'window.location.assign("/product");';
            echo '</script>';
        }
    }

    public function viewProductBasedOnID($productID,$categoryID)
    {
        $product = product::where('category_id','=',$categoryID)->get(); // sidebar
        $firstProduct = product::findorFail($productID); // selected product
        $category = category::findorFail($categoryID);

        $productID = $firstProduct->id;
        $paper = technical_paper::where('product_id','=',$productID)->get();

        return view('public_product.product',['posts'=>$product,'cposts'=>$category,'selected'=>$firstProduct,'paper'=>$paper]);
    }

    public function sortProduct($categoryID)
    {
        $product = product::where('category_id','=',$categoryID)->orderBy('index','asc')->get();
        return view('Admin.manageproduct.sortProduct',['categoryid'=>$categoryID,'posts'=>$product]);
    }
}
