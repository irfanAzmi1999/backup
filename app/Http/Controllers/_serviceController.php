<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\benefit;
use App\Models\category;
use App\Models\technical_paper;
use Illuminate\Support\Facades\Session;

class _serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['viewServiceBasedOnID']);
    }

    public function showServiceList()
    {
//        $service = service::where('category_id','=',$id)->get();
        $service = service::all();

        return view('Admin.manageservice.serviceList',['posts'=>$service]);
    }

    public function showAddServiceForm()
    {
        return view('Admin.manageservice.addnewService');
    }

    public function addNewService(Request $request)
    {
        $image = $request->file('productImage');


        $service = new service;
        $service->name = $request->input('name');
        $service->description = $request->input('servicedescription');
        $service->serviceImage = $image->getClientOriginalName();

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



        LogActivity::addToLog('Add New Service :'.$service->name);
        Return redirect()->route('listofService');

    }

    public function displayUpdateForm($id)
    {
        $service = service::findorFail($id);
        $c = category::where('role','=','Service')->get();
        return view('Admin.manageservice.updateServiceDetails',['posts'=>$service,'cposts'=>$c]);
    }

    public function updateService($id,Request $request)
    {
//       $currentCategoryID = $request->input('currentCatID');

       $service = service::findorFail($id);
       $service->name = $request->input('name');
       $service->description = $request->input('servicedescription');
//       $service->category_id = $request->input('categoryID');

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

        LogActivity::addToLog('Update Service : '.$service->name);
       return redirect()->route('listofService');
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
        if($firstService == null)
        {
            echo '<script>';
            echo 'alert("No service Found");';
            echo 'window.location.assign("/services");';
            echo '</script>';
        }
        $productID = $firstService->id;
        $paper = technical_paper::where('service_id','=',$productID)->get();

        if($firstService != null)
        {
            return view('public_service.service',['posts'=>$service,'cposts'=>$category,'selected'=>$firstService,'paper'=>$paper]);
        }
        else{
            echo '<script>';
            echo 'alert("No product Found");';
            echo 'window.location.assign("/services");';
            echo '</script>';
        }


    }

    public function viewServiceBasedOnID($serviceID)
    {
        $service = service::findorFail($serviceID);// sidebar

//        $category = category::findorFail($categoryID);

            $productID = $service->id;
            $serviceAll = service::all();
            $paper = technical_paper::where('service_id','=',$productID)->get();
            return view('public_service.service',['posts'=>$service,'paper'=>$paper,'serviceAll'=>$serviceAll]);




    }

    public function destroyService($id)
    {
        $service = service::findorFail($id);
        $service->delete();

        Session::flash('message','Service Deleted Successfully');

        LogActivity::addToLog('Removed Service :'.$service->name);
        return redirect()->route('listofService');
    }
}
