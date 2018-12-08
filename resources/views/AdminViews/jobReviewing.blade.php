@extends('AdminViews.adminMaster')

@section('content')
    <div class="row" style="margin-left: 5%;">
        @foreach($jobRev as $job)
            <div class=".col-1 col-md-6 col-lg-4">
                <div class="cards">
                    @if(!$job->picture == null)
                    <img class="card-img-top" src="{{URL::to('/jobsPictures/'.$job->picture)}}" alt="Card image cap">
                    @else
                    <img class="card-img-top" src="{{URL::to('/jobsPictures/'.'default.jpg')}}" alt="Card image cap">
                    @endif
                    <h5 class="card-title">{{$job->title}}</h5>
                    <p class="card-text">{{substr("$job->description",0,117)}}...</p>
                    <a id="button" href="{{ url('jobDetails/' . $job->id) }}" class="btn btn-xs btn-info pull-left">Details</a>
                    <a id="button" href="{{ url ('jobDestroy/'. $job->id )}}" class="btn btn-xs btn-info pull-left" style="margin:0 3;">Delete</a>
                    <a id="button" href="{{ url('jobAccept/' . $job->id) }}" class="btn btn-xs btn-info pull-left">Accept</a>
                </div>
            </div>
            @endforeach
    </div><br>
    {{$jobRev->links()}}
@stop