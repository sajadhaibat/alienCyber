@extends('Admin.layouts.master')

@section('section_title')
    Create New Scholarship
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} ">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create New Scholarship</h3>
                    <a class="btn btn-success pull-right" href="{{ route('scholarship.index') }}">Scholarships List</a>
                </div>

                <div class="box-body">
                    <div class="col-md-10 offset-md-2">
                        <form action="{{ route('scholarship.store') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Scholarship Headline</label>
                                <input type="text" class="form-control" name="headline" required>
                            </div>
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control" name="degree">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="0">Both</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Oportunity Type</label>
                                <select class="form-control" name="op_type">
                                    <option value="0">Full Funded</option>
                                    <option value="1">Partially Funded</option>
                                    <option value="2">Not Funded</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country"  required>
                            </div>

                            <div class="form-group">
                                <label>Language Requirement</label>
                                <input type="text" class="form-control" name="language_require"  required>
                            </div>

                            <div class="form-group">
                                <label>Scholarship Content</label>
                                <textarea class="textarea" name="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
