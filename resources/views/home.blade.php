@include('layouts.app')
<div class="bg-home">
</div>
<div class="container container-cards">
  <h1 id="home-title">Top 6 featured Jobs</h1>
    <div class="row">
      @foreach ($topsex as $jobs )
      <div class=".col-1 col-md-6 col-lg-4">
          <div class="cards">
          <img class="card-img-top" src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
          <h5 class="card-title">{{$jobs->title}}</h5>
          <p class="card-text">{{substr("$jobs->description",0,117)}}...</p>
          <a href="{{ url('/job/' . 'detailes/' . $jobs->id) }}" class="btn btn-xs btn-info pull-left">Edit</a>
          </div>
      </div>
      @endforeach
   </div>

   <h1 id="home-title">Recent Jobs</h1>
   <div class="row">
     @foreach ($recentjob as $job )
     <div class=".col-1 col-md-6 col-lg-4">
         <div class="cards">
         <img class="card-img-top" src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
         <h5 class="card-title">{{$job->title}}</h5>
         <p class="card-text">{{substr("$job->description",0,117)}}...</p>
         <a href="{{ url('/job/' . 'detailes/' . $job->id) }}" class="btn btn-xs btn-info pull-left">Edit</a>
         </div>
     </div>
     @endforeach
  </div>

</div>
