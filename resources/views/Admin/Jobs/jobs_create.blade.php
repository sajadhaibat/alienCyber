@extends('Admin.layouts.master')

@section('section_title')
    Create New Job
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} ">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create New Job</h3>
                    <a class="btn btn-success pull-right" href="{{ route('job.index') }}">Jobs List</a>
                </div>

                <div class="box-body">
                    <div class="col-md-10 offset-md-2">
                        <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                            <div class="form-group">
                                <label>Closing Date</label>
                                <input type="date" class="form-control" name="closing_date" required>
                            </div>

                            <div class="form-group">
                                <label>Job Position</label>
                                <input type="text" class="form-control" name="position"  required>
                            </div>

                            <div class="form-group">
                                <label>Job location</label>
                                <input type="text" class="form-control" name="location"  required>
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company"  required>
                            </div>

                            <div class="form-group">
                                <label>Number of Vacancies</label>
                                <input type="number" class="form-control" name="number_vac" required>
                            </div>
                            <div class="form-group">
                                <label>Salary Range</label>
                                <input type="text" class="form-control" name="salary_range" required>
                            </div>
                            <div class="form-group">
                                <label>Contract Duration</label>
                                <input type="text" class="form-control" name="contract_duration" required>
                            </div>
                            <div class="form-group">
                                <label>Refrenec Number</label>
                                <input type="text" class="form-control" name="ref_number" >
                            </div>
                            <div class="form-group">
                                <label>Work Type</label>
                                <select name="work_type" class="form-control">
                                    <option value="0">Full Time</option>
                                    <option value="1">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Years of Experience</label>
                                <input type="text" class="form-control" name="exp_year" required>
                            </div>
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control" name="file" required>
                            </div>
                            <button type="submit" class="btn btn-danger">Save</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
@section('scripts')
<script src="{{ asset('assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
            //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
@endsection
