<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::latest()->get();
        return view('Admin.Scholarships.scholarships', compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Scholarships.scholarship_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $scholar = new Scholarship();
        $scholar->headline = $request->headline;
        $scholar->content = $request->content;
        $scholar->country = $request->country;
        $scholar->degree = $request->degree;
        $scholar->gender = $request->gender;
        $scholar->op_type = $request->op_type;
        $scholar->language_require = $request->language_require;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('scholarshipImages');
            $image->move($destinationPath, $name);
            $scholar->file = $name;
        }
        $scholar->save();
        return redirect(route('scholarship.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scholar = Scholarship::where('id', $id)->first();
        return view('Admin.Scholarships.scholarship_edit', compact('scholar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $scholar = Scholarship::where('id', $id)->first();
        $scholar->headline = $request->headline;
        $scholar->content = $request->content;
        $scholar->country = $request->country;
        $scholar->degree = $request->degree;
        $scholar->gender = $request->gender;
        $scholar->op_type = $request->op_type;
        $scholar->language_require = $request->language_require;
        $scholar->save();
        return redirect(route('scholarship.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scholar = Scholarship::where('id', $id)->delete();
        return redirect(route('scholarship.index'));
    }
}
