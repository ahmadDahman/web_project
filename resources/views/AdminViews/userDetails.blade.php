@extends('AdminViews.adminMaster')
@section('content')
<div class="details">
    <p class="card-text-details">ID : {{$user->id}}</p>
    <p class="card-text-details">User Name : {{$user->username}}</p>
    <p class="card-text-details">Email : {{$user->email}}</p>
    <p class="card-text-details">Address : {{$user->address}}</p>
    <p class="card-text-details">Telephone Number : {{$user->tele_no}}</p>
    <p class="card-text-details">Type : {{$user->type}}</p>
</div>
@stop