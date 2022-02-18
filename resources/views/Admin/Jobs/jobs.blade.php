@extends('Admin.layouts.master')

@section('section_title')
   Jobs
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}  ">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jobs</h3>
                <a class="btn btn-info pull-right" href="{{ route('job.create') }}">Add New Job</a>
            </div>

            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Title</th>
                            <th>Position</th>
                            <th>location</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $jobs as $job)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->position }}</td>
                            <td>{{ $job->location }}</td>
                            <td>{!! substr($job->description , 0 ,90)!!}</td>
                            <td> <a class="btn btn-warning btn-sm" href="{{ route('job.edit', $job->id) }}">Edit</a>
                                <form action="{{ route('job.destroy', $job->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/Admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/Admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endsection
