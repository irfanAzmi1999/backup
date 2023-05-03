<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\responsibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Helpers\LogActivity;

class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'show'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.manageJob',['jobVar'=>job::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addNewVacancy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $requestData = $request->input('responsibility');

        $jobVariable = new Job;
        $jobVariable->jobName = $request->input('jobName');
        $jobVariable->jobDescription = $request->input('jobDescription');
        $jobVariable->user_id=Auth::user()->id;
        $jobVariable->shortDescription=$request->input('shortDescription');
        $jobVariable->save();

        foreach ($requestData as $pla)
        {
            $responsibilityv = new responsibility;
            $responsibilityv->description = $pla;
            $jobVariable->responsibilities()->save($responsibilityv);
        }
        Session::flash('message','Job Added');

        LogActivity::addToLog('Add Job Vacancy :'.$jobVariable->jobName);
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Career.careerDetails',['post'=>Job::with('responsibilities')->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $jobVar = Job::findorFail($id);


        return view('Admin.updateJob',['post'=>Job::with('responsibilities')->findorFail($id)]);
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

        $responsibilities = responsibility::where('job_id','=',$id);
        $responsibilities->delete();

        $responsibilitiesInput = $request->input('responsibility');

        $job = job::findorFail($id);
        $job->jobName = $request->input('jobName');
        $job->jobDescription = $request->input('jobDescription');
        $job->shortDescription=$request->input('shortDescription');
        $job->save();

        foreach ($responsibilitiesInput as $key => $item)
        {
            $rsp = new responsibility;
            $rsp->description = $item;
            $job->responsibilities()->save($rsp);
        }

        Session::flash('message','Vacancy Updated');

        LogActivity::addToLog('Update Job Vacancy :'.$job->jobName);
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $job=job::findorFail($id);
        $job->delete();

        Session::flash('message','Job Deleted Successfully');
        LogActivity::addToLog('Removed Job Vacancy :'.$job->jobName);
        return Redirect::back();
    }


}
