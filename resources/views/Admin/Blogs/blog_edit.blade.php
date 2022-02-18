@extends('Admin.layouts.master')

@section('section_title')
    Edit Blog
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} ">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create New Blog</h3>
                    <a class="btn btn-success pull-right" href="{{ route('blogs.index') }}">Blogs List</a>
                </div>

                <div class="box-body">
                    <div class="col-md-10 offset-md-2">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{ $blog->id }}">
                            <div class="form-group">
                                <label>Blog Headline</label>
                                <input type="text" class="form-control" name="headline" value="{{ $blog->headline }}" required>
                            </div>

                            <div class="form-group">
                                <label>Blog Content</label>
                                <textarea class="textarea" name="content"  placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{!! $blog->content !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $blog->date }}" required>
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
