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

    <!--Our Css-->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

<<<<<<< Updated upstream
    
    
=======
    {{-- dataTable 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    {{-- sweetalert --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/browse/sweetalert2@7.18.0/dist/sweetalert2.css">

>>>>>>> Stashed changes
</head>
<body>
    <div class="dashboard">
        <!--left side-->
        <nav>
            <div class="atap">
                <img src="{{asset('asset/logo-hitam.png')}}" alt="logo">
            </div>
            <div class="admin">
                <img src="{{asset('asset/ruby.png')}}" alt="image">
                <ul>
                    <li class="name" name="adm">{{ Auth::user()->nama }}</li>
                    <li>Administrator</li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li class="{{ Request::is('dashboard') ? 'nav-active' : '' }}"><a href="{{route('dashboard')}}">Dashboard</a></li> <!--use class nav-active if in current page-->
                    <li class="{{ Request::is('articles') ? 'nav-active' : '' }}"><a href="">Articles</a></li>
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
            <div class="header">
                <div class="top">
                    <button class="btn-light">View Site</button>
                    <a href="{{ route('profile') }}"><img src="{{asset('asset/ruby.png')}}" alt="profile"></a>
                <p class="adm" style="text-align:left"><a href="{{ route('profile') }}">{{ Auth::user()->nama }}</a></p>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
<<<<<<< Updated upstream
=======


>>>>>>> Stashed changes
</body>


</html>


