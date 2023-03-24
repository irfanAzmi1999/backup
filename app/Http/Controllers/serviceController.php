<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use App\Models\category;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class serviceController extends Controller
{
    public function showServiceCategory()
    {
        $serviceCategory = category::where('role','=','service')->get();
        return view('Admin.manageservice.serviceCatList',['posts'=>$serviceCategory]);
    }

    public function addServiceCategory()//show form
    {
        return view('Admin.manageservice.addServiceCat');
    }

    public function createServiceCategory(Request $data)
    {
        $picture=$data->file('catServiceImage');
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

        $picture->storeAs('public/images/service/'.$category->id.'/image',$picture->getClientOriginalName());
        Session::flash('message','New Service Category Added');
        return redirect()->route('serviceCat');
    }

    public function viewUpdateForm1($id)
    {

        $category = category::findorFail($id);
        return view('Admin.manageservice.updateServiceForm',['posts'=>$category]);
    }

    public function update(Request $request,$id)
    {
        $categoryService =category::findorFail($id);
        $categoryService->name = $request->input('name');

        if ($request->input('catServiceImage')!=null)
        {
            $image = $request->file('catServiceImage');
            $categoryService->image = $image->getClientOriginalName();
            $image->storeAs('public/images/product/'.$categoryService->id.'/image',$image->getClientOriginalName());
        }
        $categoryService->save();
        //Process Bullets
        //Delete existing bullet
        bullet::where('category_id','=',$id)->delete();

        $b = $request->input('bullet');

        foreach ($b as $key=>$bullet)
        {
            $dbBullet = new bullet;
            $dbBullet->content = $bullet;
            $categoryService->bullets()->save($dbBullet);
        }

        Session::flash('message','Service Category Updated');
        return redirect()->route('serviceCat');

    }

    public function destroyServiceCategory($id)
    {

    }



}
