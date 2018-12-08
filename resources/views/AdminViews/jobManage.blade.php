@extends('AdminViews.adminMaster')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Company Name</th>
            <th>Category</th>
            <th>Address</th>
            <th>Views</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{$job->id}}</td>
                <td>{{$job->title}}</td>
                <td>{{$job->company_name}}</td>
                <td>{{$job->category}}</td>
                <td>{{$job->address}}</td>
                <td>{{$job->views}}</td>
                <td><a  href="{{ url('jobDetails/' . $job->id) }}"><i class="fa fa-eye" style="color: black; width: 5px;"></i></a></td>
                <td>
                    {{ Form::open(array('route' => array('jobs.destroy', $job->id), 'method' => 'delete')) }}
                    <button type="submit" class="btn-c"><i class="fa fa-trash-o i-c" style="color: black;"></i></button>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Company Name</th>
            <th>Category</th>
            <th>Address</th>
            <th>Views</th>
        </tr>
        </tfoot>
    </table><br>
    {{$jobs->links()}}
@stop