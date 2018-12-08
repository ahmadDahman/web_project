@extends('AdminViews.adminMaster')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Telephone#</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->tele_no}}</td>
            <td>
            {{ Form::open(array('route' => array('admins.show', $user->id), 'method' => 'GET')) }}
            <button type="submit" class="btn-c"><i class="fa fa-eye"></i></button>
            {{ Form::close() }}
            </td>
            <td>
            {{ Form::open(array('route' => array('admins.destroy', $user->id), 'method' => 'delete')) }}
            <button type="submit" class="btn-c"><i class="fa fa-trash-o"></i></button>
            {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Telephone#</th>
        </tr>
        </tfoot>
    </table><br>
    {{$users->links()}}
@stop