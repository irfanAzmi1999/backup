<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\job_applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class applicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume = $request->file('resume');
        $suppDoc = $request->file('suppDoc');
        $image = $request->file('image');
//        $cv = $request->file('cv');

        $applicant = new job_applicant;
        $applicant->name = $request->input('name');
        $applicant->phone = $request->input('phone');
        $applicant->email = $request->input('email');
        $applicant->address = $request->input('address');
        $applicant->resume = $resume->getClientOriginalName();
        $applicant->image = $image->getClientOriginalName();
        $applicant->job_id = $request->input('job_id');
        $applicant->save();

        $resume->storeAs('public/document/job_application/'.$applicant->id.'/resume',$resume->getClientOriginalName());
        $image->storeAs('public/document/job_application/'.$applicant->id.'/image',$image->getClientOriginalName());

        if ($suppDoc!=null)
        {
            $applicant->cert = $suppDoc->getClientOriginalName();
            $suppDoc->storeAs('public/document/job_application/'.$applicant->id.'/suppDoc',$suppDoc->getClientOriginalName());
        }

//        if ($cv !=null)
//        {
//            $applicant->cv = $cv->getClientOriginalName();
//            $cv->storeAs('public/document/job_application/'.$applicant->id.'/cv',$cv->getClientOriginalName());
//        }

        $applicant->save();

        Session::flash('message','Application submitted. Thank you');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobTitle = job::findorFail($id);

        return view('Admin.jobApp.listOfApplication',['posts'=>job_applicant::where('job_id','=',$id)->get(),'jobTitle'=>$jobTitle->jobName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function showApplicant($id)
    {
        $applicant = job_applicant::findorFail($id);

        return view('Admin.jobApp.applicantDetails',['posts'=>$applicant]);
    }

}
