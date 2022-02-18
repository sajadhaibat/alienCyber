<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Job;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blogs::select('id', 'headline', 'content', 'file', 'date')->latest()->limit(3)->get();
        return view('index', compact('blogs'));
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function site_blogs()
    {
        $blogs = Blogs::select('id', 'headline', 'content', 'file', 'date')->latest()->paginate(9);
        return view('SiteBlogs.site_blogs', compact('blogs'));
    }

    public function show_blog($id)
    {
        $blog = Blogs::where('id', $id)->select('id', 'headline', 'content', 'file', 'date')->first();
        return view('SiteBlogs.show_blog', compact('blog'));
    }

    public function site_jobs()
    {
        $jobs = Job::latest()->paginate(10);
        return view('SiteJobs.site_jobs', compact('jobs'));
    }

    public function show_job($id)
    {
        $job = Job::where('id', $id)->first();
        return view('SiteJobs.show_job', compact('job'));
    }

    public function site_scholarships()
    {
        $scholarships = Scholarship::latest()->paginate(10);
        return view('SiteScholarship.site_scholarships', compact('scholarships'));
    }

    public function show_scholarship($id)
    {
        $scholarship = Scholarship::where('id', $id)->first();
        return view('SiteScholarship.show_scholarship', compact('scholarship'));
    }
}
