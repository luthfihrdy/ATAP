@extends('layouts.navlogin')
        
@section('content')

<div class="login">
    <div class="square">
      <img src="asset/logo-hitam.png" alt="logo">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="pd">
          <h1 class="boxt">LOGIN</h1>
          <input type="text" name="username" class="boxw2 @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" id="username" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          <input type="password" name="password" id="password" class="boxw2 @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="side">
        <button class="arrow" type="submit">
          <img src="asset/panah-hijau.svg">
        </button>
        {{-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif --}}
      </form>

      
    </div>
  </div>
@endsection
