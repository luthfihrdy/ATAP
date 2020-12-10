<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--icon-->
    <link rel="shortcut icon" href="{{ asset('/asset/faviconb.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!--CkEditor-->
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    {{-- dataTable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    {{-- sweetalert --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/browse/sweetalert2@7.18.0/dist/sweetalert2.css">

    {{-- highchart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

</head>
<body>
    <div class="dashboard">
        <!--left side-->
        <nav>
            <div class="atap">
                <img src="{{asset('asset/logo-hitam.png')}}" alt="logo">
            </div>
            <div class="admin row">
                <div class="col-4"> 
                    <a href="{{route('profile',['userid'=>Auth::user()->id_akun])}}">
                        <img src="{{asset('asset/images/profile/'.Auth::user()->nama_file)}}" alt="{{Auth::user()->nama_file}}">
                    </a>
                </div>
                <div class="col-8">
                <ul>
                    <a href="{{route('profile',['userid'=>Auth::user()->id_akun])}}" class="dashname"><li class="name" name="adm">{{ Auth::user()->nama }}</li></a>
                    <li>Administrator</li>
                </ul>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="{{ Request::is('dashboard') ? 'nav-active' : '' }}"><a href="{{route('dashboard')}}">Dashboard</a></li> <!--use class nav-active if in current page-->
                    <li class="{{ Request::is('artikel') ? 'nav-active' : '' }}"><a href="{{route('artikel')}}">Articles</a></li>
                </ul>
            </div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <button class="btn-green">
                    {{ __('Logout') }}
                </button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    
        <!--main content-->
        <div class="main">

            <!--header-->
            <div class="head">
                <div class="top">
                    <ul>
                        <li><a href="{{route('home')}}"><button class="btn-light">View Site</button></a></li>
                        <li><a href="{{route('profile',['userid'=>Auth::user()->id_akun])}}"><img src="{{asset('asset/images/profile/'.Auth::user()->nama_file)}}" alt="{{Auth::user()->nama_file}}"></a></li>
                        <li p name="adm"><a href="{{route('profile',['userid'=>Auth::user()->id_akun])}}">{{ Auth::user()->nama }}</a></li>
                    </ul>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('sweetalert::alert')



</body>


</html>

