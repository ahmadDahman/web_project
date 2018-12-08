@include('layouts.app')
<div class="container container-cards">
<div class="row">
    @foreach ($offering as $offer )
        <div class=".col-1 col-md-6 col-lg-4">
            <div class="card cards">
                <img class="card-img-top" src="{{URL::to('/jobsPictures/'.$offer->picture)}}" alt="Card image cap">
                <h5 class="card-title">{{$offer->title}}</h5>
                <p class="card-text">{{substr("$offer->description",0,117)}}...</p>
                <a href="{{ url('/jobs/' . $offer->id) }}" class="btn btn-xs btn-info pull-left">Details</a>
            </div>
        </div>
    @endforeach
</div>
</div>
