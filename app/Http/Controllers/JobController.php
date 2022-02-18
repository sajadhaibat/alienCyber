<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs =  Job::latest()->get();
        return view('Admin.Jobs.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Jobs.jobs_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->start_date = $request->start_date;
        $job->closing_date = $request->closing_date;
        $job->number_vac = $request->number_vac;
        $job->salary_range = $request->salary_range;
        $job->contract_duration = $request->contract_duration;
        $job->ref_number = $request->ref_number;
        $job->work_type = $request->work_type;
        $job->exp_year = $request->exp_year;
        $job->location = $request->location;
        $job->position = $request->position;
        $job->company = $request->company;
        $job->description = $request->description;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('jobsImages');
            $image->move($destinationPath, $name);
            $job->file = $name;
        }
        $job->save();
        return redirect(route('job.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::where('id', $id)->first();
        return view('Admin.Jobs.jobs_edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::where('id', $id)->first();
        $job->title = $request->title;
        $job->start_date = $request->start_date;
        $job->closing_date = $request->closing_date;
        $job->number_vac = $request->number_vac;
        $job->salary_range = $request->salary_range;
        $job->contract_duration = $request->contract_duration;
        $job->ref_number = $request->ref_number;
        $job->work_type = $request->work_type;
        $job->exp_year = $request->exp_year;
        $job->location = $request->location;
        $job->position = $request->position;
        $job->company = $request->company;
        $job->description = $request->description;
        $job->save();
        return redirect(route('job.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::where('id', $id)->delete();
        return redirect(route('job.index'));
    }
}
