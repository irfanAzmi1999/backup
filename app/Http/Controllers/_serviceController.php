<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\benefit;
use App\Models\category;
use Illuminate\Support\Facades\Session;

class _serviceController extends Controller
{
    public function showServiceList($id)
    {
        $service = service::where('category_id','=',$id)->get();
        $cat = category::findorFail($id);

        return view('Admin.manageservice.serviceList',['posts'=>$service,'cat'=>$cat]);
    }

    public function showAddServiceForm($id)
    {
        $cat = category::findorFail($id);

        return view('Admin.manageservice.addnewService',['posts'=>$cat]);
    }

    public function addNewService(Request $request)
    {
        $image = $request->file('productImage');


        $service = new service;
        $service->name = $request->input('name');
        $service->description = $request->input('servicedescription');
        $service->serviceImage = $image->getClientOriginalName();
        $service->category_id = $request->input('categoryID');
        if($request->file('principle_logo')!=null)
        {
            $service->principleLogo = $request->file('principle_logo')->getClientOriginalName();
        }

        $service->save();

        $benefits = $request->input('benefits');

        foreach($benefits as $key=>$item)
        {
            $b = new benefit;
            $b->title = $item;
            $b->description = $request->input('benefitDescription')[$key];
            $b->role = 'Services';
            $service->benefits()->save($b);
        }

        $image->storeAs('public/images/service/'.$service->id,$image->getClientOriginalName());

        if($request->file('principle_logo')!=null)
        {
            $pImage = $request->file('principle_logo');
            $pImage->storeAs('public/images/service/'.$service->id.'/principleLogo',$request->file('principle_logo')->getClientOriginalName());
        }

        Session::flash('Message','Service Added');

        $categoryID = $request->input('categoryID');
        Return redirect()->route('listofService',[$categoryID]);

    }

    public function displayUpdateForm($id)
    {
        $service = service::findorFail($id);
        $c = category::where('role','=','Service')->get();
        return view('Admin.manageservice.updateServiceDetails',['posts'=>$service,'cposts'=>$c]);
    }

    public function updateService($id,Request $request)
    {
       $currentCategoryID = $request->input('currentCatID');

       $service = service::findorFail($id);
       $service->name = $request->input('name');
       $service->description = $request->input('servicedescription');
       $service->category_id = $request->input('categoryID');

       if($request->file('serviceImage')!=null)
       {
            $service->serviceImage = $request->file('serviceImage')->getClientOriginalName();
            $imageName = $request->file('serviceImage')->getClientOriginalName();
            $request->file('serviceImage')->storeAs('public/images/service/'.$service->id,$imageName);
       }

       if($request->file('principle_logo')!=null)
       {
            $service->principleLogo = $request->file('principle_logo')->getClientOriginalName();
            $imagePName = $request->file('principle_logo')->getClientOriginalName();
            $request->file('principle_logo')->storeAs('public/images/service/'.$id.'/principleLogo',$imagePName);
       }

       $service->save();

       benefit::where('service_id','=',$id)->delete();

       $benefit = $request->input('benefits');

       foreach($benefit as $key=>$item)
       {
            $b = new benefit;
            $b->title = $item;
            $b->description = $request->input('benefitDescription')[$key];
            $b->role = 'Services';
            $service->benefits()->save($b);
       }

       Session::flash('message','Service Updated');
       return redirect()->route('listofService',[$currentCategoryID]);
    }

    public function viewServiceDetails($id)
    {
        $service = service::findorFail($id);
        return view('Admin.manageservice.viewService',['posts'=>$service]);
    }

    public function viewServiceBasedOnCategory($categoryID)
    {
        $service = service::where('category_id','=',$categoryID)->get(); // sidebar
        $firstService = service::where('category_id','=',$categoryID)->first(); // selected product
        $category = category::findorFail($categoryID);

        if($firstService != null)
        {
            return view('public_service.service',['posts'=>$service,'cposts'=>$category,'selected'=>$firstService]);
        }
        else{
            echo '<script>';
            echo 'alert("No product Found");';
            echo 'window.location.assign("/services");';
            echo '</script>';
        }


    }

    public function viewServiceBasedOnID($serviceID,$categoryID)
    {
        $service = service::where('category_id','=',$categoryID)->get(); // sidebar
        $firstProduct = service::findorFail($serviceID); // selected product
        $category = category::findorFail($categoryID);

        if($firstProduct != null)
        {
            return view('public_service.service',['posts'=>$service,'cposts'=>$category,'selected'=>$firstProduct]);
        }
        else
        {
            echo '<script>';
            echo 'alert("No product Found");';
            echo 'window.location.assign("/services");';
            echo '</script>';
        }


    }

    public function destroyService($id,$catID)
    {
        $service = service::findorFail($id);
        $service->delete();

        Session::flash('message','Service Deleted Successfully');
        return redirect()->route('listofService',[$catID]);
    }
}
