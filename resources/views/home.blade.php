@extends('layouts.navuser')
@section('content')
    <div class="home">
        <div class="section1">
            <h1 class="wm">ATAP</h1>
            <h2>APLIKASI</h2>
            <h2>TANAM PANGAN</h2>
            <div class="search">
                <form action="{{route('search')}}" method="GET">
                    <input type="text" placeholder="What to Plant Now?" name="search" value="{{ old('cari') }}">
                    <button type="submit" class="go">GO</button>  
                </form>
            </div>
        </div>

        <div class="vag">
            <img src="{{asset('asset/sayur.png')}}" alt="vegetables">
        </div>

        <!--edited-->
        <div class="section2">
            <div class="row">
                <div class="col-2">
                    <div class="scroll">
                        <a class="arrow" href="#sc">SCROLL<img src="{{asset('asset/panah-hijau.svg')}}"></a>    
                    </div>
                </div>
            </div>
        </div>
        <!--end of edited-->

        <div class="section3" id="sc">
            <div class="row">
                <div class="col-6">
                    <h1 class="boxt">Some top articles to inspire you!</h1>
                </div>
                <div class="col-6">
                    <p>Part of the enjoyment of planning your garden is choosing which seed varieties you want to grow. Below are a few articles about you want to plant</p>
                </div>
            </div>
        </div>

        <div class="section4">
            <!--image 1-->
            @forelse($artikel as $data)
            <div class="img-article">
                <img src="{{asset('asset/images/'.$data->nama_file)}}" alt="{{$data->nama_file}}">
                <div class="detail">
                    <h2><a href="{{route('data',['artikel'=>$data->id_artikel])}}">{{$data->judul}}</a></h2>
                    <p>{{substr(strip_tags($data->content),0, 100)}} {{ strlen(strip_tags($data->content))>100 ? "..." : ""}} </p>
                </div>
            </div>
            @empty 
            <div class="img-article">
                <img src="{{asset('asset/jagung-01.png')}}" alt="corn">
                <div class="detail">
                    <h2><a href="#">DATA TIDAK ADA</a></h2>
                    <p>DATA TIDAK ADA</p>
                </div>
            </div>
            @endforelse

            {{-- <!--image 2-->
            <div class="img-article">
                <img src="{{asset('asset/jagung-01.png')}}" alt="corn">
                <div class="detail">
                    <h2><a href="#">Corn</a></h2>
                    <p>A cereal gain first domesticated by indigenous peoples in southern Mexico about 10,000 years ago.</p>
                </div>
            </div> --}}

            <div class="btn-link">
                <a href="{{route('articles')}}">
                    <img src="{{asset('asset/panah-hijau.svg')}}">
                    <p>see more</p>
                </a>
            </div>
        </div>

        <div class="section5">
            <div class="row">
                <div class="col-6">
                    <h1 class="boxt">About</h1>
                </div>
                <div class="col-6">
                    <p>Want to know about this page and meeting people behind this website? Click About!</p>
                </div>
            </div>
        </div>

        <div class="section6">
            <div class="icon">
                <img class="bg" src="{{asset('asset/ubi-01.png')}}">
            </div>
            <div class="keterangan">
                <h1 class="wm">ATAP</h1>
                <p>ATAP or Aplikasi Tanam Pangan is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ATAP or Aplikasi Tanam Pangan is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="btn-link">
                    <a href="{{route('about')}}">
                        <img src="asset/panah-hijau.svg">
                        <p>know more</p>
                    </a>
                </div>
            </div>
            <div class="icon">
                <img class="bg1" src="{{asset('asset/talas-02.png')}}">
            </div>
        </div>
    </div>
@endsection
