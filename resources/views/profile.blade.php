@extends('layouts.navadmin')
@section('content')
<div class="profile">
    <h1 name="adm">{{$profile->username}}</h1>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('asset/images/profile/'.$profile->nama_file)}}" alt="{{$profile->nama_file}}">
        </div>
        <div class="col-8">
            <h5 class="boxw">{{$profile->nama}}</h5>
            <h4 class="boxw">{{$profile->email}}</h4>
            <h4 class="boxw">{{$profile->no_hp}}</h4>
        </div>
    </div>
</div>
@endsection