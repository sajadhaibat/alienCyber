@extends('Admin.layouts.master')

@section('section_title')
    Edit Scholarship
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} ">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Scholarship </h3>
                    <a class="btn btn-success pull-right" href="{{ route('scholarship.index') }}">Scholarships List</a>
                </div>

                <div class="box-body">
                    <div class="col-md-10 offset-md-2">
                        <form action="{{ route('scholarship.update', $scholar->id) }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{ $scholar->id }}">
                            <div class="form-group">
                                <label>Scholarship Headline</label>
                                <input type="text" class="form-control" name="headline" value="{{ $scholar->headline }}" required>
                            </div>

                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control" name="degree" value="{{ $scholar->degree }}">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="0" {{ ($scholar->gender == 0) ? 'selected' : ''  }}>Both</option>
                                    <option value="1"  {{ ($scholar->gender == 1) ? 'selected' : ''  }}>Male</option>
                                    <option value="2"  {{ ($scholar->gender == 2) ? 'selected' : ''  }}>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Oportunity Type</label>
                                <select class="form-control" name="op_type">
                                    <option value="0"  {{ ($scholar->op_type == 0) ? 'selected' : ''  }}>Full Funded</option>
                                    <option value="1" {{ ($scholar->op_type == 1) ? 'selected' : ''  }}>Partially Funded</option>
                                    <option value="2" {{ ($scholar->op_type == 2) ? 'selected' : ''  }}>Not Funded</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" value="{{ $scholar->country }}" required>
                            </div>
                            <div class="form-group">
                                <label>Language Requirement</label>
                                <input type="text" class="form-control" name="language_require" value="{{ $scholar->language_require }}" >
                            </div>
                            <div class="form-group">
                                <label>Blog Content</label>
                                <textarea class="textarea" name="content"  placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{!! $scholar->content !!}</textarea>
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
