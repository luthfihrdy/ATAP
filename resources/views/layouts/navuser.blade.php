<!doctype html>
<html lang="en">
    <head>
        <!--icon-->
        <link rel="shortcut icon" href="{{ asset('/asset/faviconb.ico') }}">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--icon-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
            
        <!--Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--Our Css-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!--
            {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        -->

        <title>ATAP(Aplikasi Tanam Pangan)</title>
    </head>
    <body>
        <div class="header">
            <ul>
                <li><a href="{{route('home')}}">HOME</a></li>
                <li><a href="{{route('articles')}}">ARTICLE</a></li>
                <li>
                    <a href="{{route('home')}}">
                        <img src="{{asset('asset/logo-hitam.png')}}" alt="ATAP logo" id="logo">
                    </a>
                </li>
                <li><a href="{{route('about')}}">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>          
            </ul>
            {{-- if admin login --}}
            @if(Auth::check())
            <ul>
                <li class="right marg-top"><a href="{{route('dashboard')}}">DASH</a></li>
            </ul>
            @endif
        </div>
        <main>
            @yield('content')
        </main>
@extends('layouts.footeruser')