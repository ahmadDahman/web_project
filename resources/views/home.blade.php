@include('layouts.app')
<script src="/js/master.js"></script>
<div class="bg-home">
    <h1 id ="welcome"></h1>
</div>
<div class="container container-cards">
  <h1 id="home-title">Top 6 featured Jobs</h1>
    <div class="row">
      @foreach ($topsex as $jobs )
      <div class=".col-1 col-md-6 col-lg-4">
          <div class="cards">
          <img class="card-img-top" src="{{URL::to('/jobsPictures/'.$jobs->picture)}}" alt="Card image cap">
          <h5 class="card-title">{{$jobs->title}}</h5>
          <p class="card-text">{{substr("$jobs->description",0,117)}}...</p>
          <a id="button" href="{{ url('/job/' . 'detailes/' . $jobs->id) }}" class="btn btn-xs btn-info pull-left">Details</a>
          </div>
      </div>
      @endforeach
   </div>
    <hr>
   <h1 id="home-title" class="recent">Recent Jobs</h1>
   <div class="row">
     @foreach ($recentjob as $job )
     <div class=".col-1 col-md-6 col-lg-4">
         <div class="cards">
         <img class="card-img-top" src="{{URL::to('/jobsPictures/'.$job->picture)}}" alt="Card image cap">
         <h5 class="card-title">{{$job->title}}</h5>
         <p class="card-text">{{substr("$job->description",0,117)}}...</p>
         <a id="button" href="{{ url('/job/' . 'detailes/' . $job->id) }}" class="btn pull-left">Details</a>
         </div>
     </div>
     @endforeach
  </div>

</div>
