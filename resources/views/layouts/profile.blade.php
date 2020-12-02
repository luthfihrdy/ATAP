
<html>
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
            <!--main content-->
            <div class="main">
                <!--header-->
                <div class="header">
                    <div class="top">
                        <button class="btn-light"><a href="{{ url('/dashboard')}}">Dashboard</a></button>
                        <a href="{{ url('/profile')}}"><img src="asset/ruby.png" alt="profile"></a>
                        <p name="adm"><a href="{{ url('/profile')}}">{{ Auth::user()->nama }}</a></p>
                    </div>
                </div>
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    
        <title>Profile</title>
        <!--icon-->
        <link rel="shortcut icon" href="asset/faviconw.ico">
        
        <!--Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--Our Css-->
        <link rel="stylesheet" href="css/style.css">
        <!--
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        -->

    </head>
    <body>

        <div class="profile">
            <h1 name="adm">{{ Auth::user()->nama }}</h1>
            <div class="row">
                <div class="col-4">
                    <img src="asset/ruby.png" alt="profile">
                </div>
                <div class="col-8">
                    <h5 class="boxw">{{ Auth::user()->username }}</h5>
                    <h4 class="boxw">{{ Auth::user()->email }}</h4>
                    <h4 class="boxw">{{ Auth::user()->no_hp }}</h4>
                    <h4 class="boxw">{{ Auth::user()->alamat }}</h4>
                </div>
            </div>
        </div>

    </body>
</html>
