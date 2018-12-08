@extends('AdminViews.adminMaster')

@section('content')
    <div class="row admin-home-card">
        <div class=".col-1 col-md-6 col-lg-4">
            <div class="admin-card">
                <h5 class="card-title">Number Of Users</h5>
                <h5 class="card-title">{{$NumberOfUsers}}</h5>
            </div>
        </div>
        <div class=".col-1 col-md-6 col-lg-4">
            <div class="admin-card">
                <h5 class="card-title">Number Of Jobs</h5>
                <h5 class="card-title">{{$NumberOfJobs}}</h5>
            </div>
        </div>
        <div class=".col-1 col-md-6 col-lg-4">
            <div class="admin-card">
                <h5 class="card-title">Number Of Views</h5>
                <h5 class="card-title">{{$NumberOfViews}}</h5>
            </div>
        </div>
    </div>
@stop