@include('layouts.app')

<body>
  <div class="container container-cards">
    <div class="detils-content">
        <div class="cards">
        <img class="card-img-top" src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
        <h5 class="card-title-details">{{$job->title}}</h5>
        <p class="card-text-details">comany name : {{$job->company_name}}</p>
        <p class="card-text-details">categroy : {{$job->categroy}}</p>
        <p class="card-text-details">address : {{$job->address}}</p>
        <p class="card-text-details">street : {{$job->street}}</p>
        <p class="card-text-details">city : {{$job->city}}</p>
        <p class="card-text-details">description : {{$job->description}}</p>
        <p class="card-text-details">requirements : {{$job->requirements}}</p>
        <p class="card-text-details">salary : {{$job->salary}}</p>
        @foreach ($contactInformation as $contact)
          @if ($contact->tele_no)
            <p class="card-text-details">Telepone Number : {{$contact->tele_no}}</p>
          @endif
        @endforeach
        @foreach ($contactInformation as $contact)
          @if ($contact->email)
            <p class="card-text-details">Email : {{$contact->email}}</p>
          @endif
        @endforeach

        </div>
    </div>
  </div>

</body>
