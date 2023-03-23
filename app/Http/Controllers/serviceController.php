<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use App\Models\category;
use Illuminate\Http\Request;

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

        $picture->storeAs('public/images/service/'.$category->name.'/image',$picture->getClientOriginalName());
        return redirect()->route('serviceCat');
    }


}
