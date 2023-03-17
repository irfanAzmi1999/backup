<?php

namespace App\Http\Controllers;

use App\Models\job_applicant;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

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
        $cv = $request->file('cv');

        $applicant = new job_applicant;
        $applicant->name = $request->input('name');
        $applicant->phone = $request->input('phone');
        $applicant->email = $request->input('email');
        $applicant->address = $request->input('address');
        $applicant->resume = $resume->getClientOriginalName();
        $applicant->save();

        $resume->storeAs('public/document/job_application/'.$applicant->id.'/resume',$resume->getClientOriginalName());

        if ($suppDoc!=null)
        {
            $applicant->cert = $suppDoc->getClientOriginalName();
            $suppDoc->storeAs('public/document/job_application/'.$applicant->id.'/suppDoc',$suppDoc->getClientOriginalName());
        }

        if ($cv !=null)
        {
            $applicant->cv = $cv->getClientOriginalName();
            $cv->storeAs('public/document/job_application/'.$applicant->id.'/cv',$cv->getClientOriginalName());
        }

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
        //
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
}
