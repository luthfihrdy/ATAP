@extends('layouts.navuser')
@section('content')
<div class="sub-article">
    <div class="section1">
      <h1 class="wm">{{$data->kategori}}</h1>
    </div>

    <div class="vag">
        <img src="{{asset('asset/images/'.$data->nama_file)}}" alt="{{$data->nama_file}}">
    </div>
    <div class="sub-title">
      <h2>{{$data->judul}}</h2>
    </div>

    <div class="section2">
        <div class="scroll">
          <a class="arrow" href="#sec3">SCROLL<img src="{{asset('asset/panah-hijau.svg')}}"></a>    
        </div>
    </div>

    <div class="sectiont">
        <div class="row">
            <div class="col-10">
            <p>Posted By : {{$artikel[0]->nama}} <br/>{{$data->updated_at}}</p>
            </div>
            <div class="col-2">
                <div class="funfact">
                    <h3 class="boxt">fun fact!</h3>
                    <p>The potato is about 80% water and 20% solids!</p>
                </div>
            </div>
        </div>
      </div>

    <div class="section3" id="sec3">
        <div class="row">
            <div class="col-10">
                {!! $data->content !!}

            </div>
        </div>
    </div>

    
  </div>

@endsection