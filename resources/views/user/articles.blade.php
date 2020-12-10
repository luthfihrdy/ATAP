@extends('layouts.navuser')
@section('content')
<div class="article">
    <div class="section1">
      <h1 class="wm">ARTICLES</h1>
    </div>

    <div class="vag">
        <img src="asset/sayur.png" alt="vegetables">
    </div>
    
    <!--edited-->
    <div class="section2">
      <div class="row">
          <div class="col-2">
              <div class="scroll">
                  <a class="arrow" href="#sc">SCROLL<img src="asset/panah-hijau.svg"></a>    
              </div>
          </div>
          <div class="col-10">
            <div class="sub-title">
              <h2>ARTICLES</h2>
            </div>
          </div>
      </div>
  </div>
  <!--end of edited-->

    <div class="section3" id="sc">
      <p>Part of the enjoyment of planning your garden is choosing which seed varieties you want to grow. Below are a few articles about you want to plant</p>
    </div>
  </div>

  <div class="content-article">
    <div class="section4">
      @forelse($artikel as $data)
        <!--image 1-->
        <div class="img-article">
            <img src="{{asset('asset/images/'.$data->nama_file)}}" alt="{{$data->nama_file}}">
            <div class="detail">
                <h2><a href="{{route('data',['artikel'=>$data->id_artikel])}}">{{$data->judul}}</a></h2>
                <p>{{substr(strip_tags($data->content),0, 100)}} {{ strlen(strip_tags($data->content))>100 ? "..." : ""}} </p>
            </div>
        </div>
        @empty 
          <center>
            <div class="img-article">
                <h2>DATA TIDAK DITEMUKAN</h2>
            </div>
          </center>
          {{-- <div class="img-article">
            <img src="asset/jagung-01.png" alt="corn">
            <div class="detail">
                <h2><a href="#">Corn</a></h2>
                <p>A cereal gain first domesticated by indigenous peoples in southern Mexico about 10,000 years ago.</p>
            </div>
        </div> --}}
        @endforelse

      <!--image 2-->
      {{-- <div class="img-article">
          <img src="asset/jagung-01.png" alt="corn">
          <div class="detail">
              <h2><a href="#">Corn</a></h2>
              <p>A cereal gain first domesticated by indigenous peoples in southern Mexico about 10,000 years ago.</p>
          </div>
      </div> --}}

      {{-- <!--image 3-->
      <div class="img-article">
          <img src="asset/ubi-01.png" alt="sweet potato">
          <div class="detail">
              <h2><a href="#">Sweet Potato</a></h2>
              <p>A dicotyledonus plant that belongs to the bindweed or morning glory family, Convolvulaceae. Its large, sratchy, sweet-tasting, tuberous roots are a root vagetable.</p>
            </div>
      </div>

      <!--image 4-->
      <div class="img-article">
        <img src="asset/pisang-01.png" alt="banana">
        <div class="detail">
            <h2><a href="#">Banana</a></h2>
            <p>A edible fruit - botanically a berry - produced by several kinds of large herbaceous flowering plants in the genus Musa.</p>
          </div>
      </div>

      <!--image 5-->
      <div class="img-article">
        <img src="asset/talas-01.png" alt="Taro">
        <div class="detail">
            <h2><a href="#">Taro</a></h2>
            <p>A tropical plant grown primarily for its edible corms, a root vegetable most commonly known as taro, or kalo. It is the most widely cultivated species of several plant in the family araceae that are used as vegetables for their corms, leaves, and petioles.</p>
          </div>
      </div> --}}
  </div>
@endsection