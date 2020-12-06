@extends('layouts.navuser')
@section('content')
<div class="about">
    <div class="section1">
      <h1 class="wm">ABOUT</h1>
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
              <h2>ABOUT</h2>
            </div>
          </div>
      </div>
  </div>
  <!--end of edited-->

    <div class="wmbg">
      <img src="asset/logo-hitam.png" alt="vegetables">
    </div>

    <div class="section3" id="sc">
      <p>ATAP is a web-based application that designed to explain how to grow a plant properly and correctly, especially for staple food plant. ATAP have some fun facts too about the plant that can give more information. You can use ATAP if you want to grow food plants so you can plant them in the right way, if you want to know about staple food fact and if you want to learn something new about planting.</p>
    </div>

    <div class="section1">
      <h3 class="boxt">meet our team</h3>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/lutpi.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">M. Luthfi Hardiansyah</h5>
              <p class="card-text">Project Leader</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/kintn.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kintan Umari</h5>
              <p class="card-text">Front-end web developer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/fiya.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fiya Mahdaula</h5>
              <p class="card-text">Front-end web developer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/mun.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Munadi Lil Iman</h5>
              <p class="card-text">Back-end web developer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/fen.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fenny Aminatunnisak</h5>
              <p class="card-text">Back-end web developer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/ben.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Benazheer salsabila</h5>
              <p class="card-text">UI/UX Designer</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="asset/asep.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Septian Afif R.</h5>
              <p class="card-text">UI/UX Designer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection