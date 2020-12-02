<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--TinyMCE-->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Our Css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
    
</head>
<body>
    <div class="dashboard">
        <!--left side-->
        <nav>
            <div class="atap">
                <img src="asset/logo-hitam.png" alt="logo">
            </div>
            <div class="admin">
                <img src="asset/ruby.png" alt="image">
                <ul>
                    <li class="name" name="adm">{{ Auth::user()->nama }}</li>
                    <li>Administrator</li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li class="nav-active"><a href="#">Dashboard</a></li> <!--use class nav-active if in current page-->
                    <li class=""><a href="#">Articles</a></li>
                    <li class=""><a href="#">Fun Facts</a></li>
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
                    <img src="asset/ruby.png" alt="profile"></a>
                    <p name="adm"><a href="{{ url('/profile')}}">{{ Auth::user()->nama }}</a></p>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>


</html>

