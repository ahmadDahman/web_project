<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="admin-body">
<aside class="main_sidebar">
    <ul>
        <li><a href={{ route('adminsHome') }}>Dashboard</a></li>
        <li><a href={{ route('userManage') }}>Users Manage</a></li>
        <li><a href={{ route('jobManage') }}>Jobs Manage</a></li>
        <li><a href={{ route('jobReviewing') }}>Jobs Reviewing</a></li>
        <li><a href="{{route('jobSponsored')}}">Jobs Sponsored</a></li>
        <li><a href="{{route('jobNotSponsored')}}">Jobs Not Sponsored</a></li>
        <li> <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
    </ul>
</aside>
<div class="admin-content">@yield('content')</div>
</body>


