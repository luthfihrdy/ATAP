@extends('layouts.navuser')
@section('content')
<div class="sub-article">
    <div class="section1">
      <h1 class="wm">{{$data->kategori}}</h1>
    </div>

    <div class="vag">
        <img src="{{asset('asset/images/'.$data->nama_file)}}" alt="{{$data->nama_file}}">
    </div>

    <!--edited-->

    <div class="section2">
      <div class="row">
          <div class="col-2">
              <div class="scroll">
                  <a class="arrow" href="#sc">SCROLL<img src="{{asset('asset/panah-hijau.svg')}}"></a>    
              </div>
          </div>
          <div class="col-10">
            <div class="sub-title">
              <h2>{{$data->judul}}</h2>
            </div>
          </div>
      </div>
  </div>

  <div class="sectiont" id="sc">
    <div class="col-2">
      <div class="funfact">
          <h3 class="boxt">fun fact!</h3>
          <p>{{$data->funfact}}</p>
      </div>
    </div>
    
    <div class="col-10">
      <div class="author">
        <p>Posted By : <span>{{$artikel[0]->nama}}</span></p>
        <p>{{$data->created_at}}</p>
        <p><span>{{$data->views}}</span> readers</p>
      </div>

      <div class="row">
          <p>Potatoes are members of the nightshade family, like tomatoes, eggplants and peppers. They are not root vegetables; potatoes are actually the swollen part of the stem of the perennial Solanum</p>
      </div>
    </div>
  </div>
  <!--end of edited-->


    <div class="section3" id="sec3">
        <div class="row">
            <div class="col-10">
                {!! $data->content !!}

            </div>
        </div>
    </div>

    
  </div>

@endsection