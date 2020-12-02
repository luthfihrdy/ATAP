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
                    <a href=""><img src="{{asset('asset/ruby.png')}}" alt="profile"></a>
                    <p class="adm" style="text-align:left"><a href="#">{{ Auth::user()->nama }}</a></p>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>


</html>

