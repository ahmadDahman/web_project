@include('layouts.app')

    <div class="row" style="margin-left: 5%; margin-top: 5%">
        @if($search->isEmpty())
            <h5 class="card-title">There Are No Results! Try Again Using Other Words ..</h5>
        @else
        @foreach($search as $job)
            <div class=".col-1 col-md-6 col-lg-4">
                <div class="card cards">
                        @if(!$job->picture == null)
                            <img class="card-img-top" src="{{URL::to('/jobsPictures/'.$job->picture)}}" alt="Card image cap">
                        @else
                            <img class="card-img-top" src="{{URL::to('/jobsPictures/'.'default.jpg')}}" alt="Card image cap">
                        @endif
                            <h5 class="card-title">{{$job->title}}</h5>
                            <p class="card-text">{{substr("$job->description",0,117)}}...</p>
                            <a id="button" href="{{ url('jobs/' . $job->id) }}" class="btn btn-xs btn-info pull-left">Details</a>
                </div>
            </div>
        @endforeach
        @endif
    </div><br>
    {{$search->links()}}
