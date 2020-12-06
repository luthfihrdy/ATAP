@extends('layouts.navadmin')
@section('content')

<div class="add">
    <h1>ADD NEW ARTICLE</h1>
    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" value="{{Auth::user()->id_akun}}" name="id_akun" hidden>
        <div class="form-group">
            <h4 class="box">TITLE</h4>
            <input type="text" class="form-control form-kat @error('judul') is-invalid @enderror" name="judul" placeholder="description" rows="5" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <h4 class="box">CONTENT</h4>
            <textarea type="text" id="form-control" class="form-control @error('konten') is-invalid @enderror" name="konten" placeholder="CONTENT" rows="10">{{old('konten')}}</textarea>
            @error('konten')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <h4 class="box">FUN FACT!</h4>
            <input type="text" class="form-control form-kat @error('funfact') is-invalid @enderror" name="funfact" placeholder="description" value="{{old('funfact')}}">
            @error('funfact')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <h4 class="box">CATEGORY</h4>
            <input type="text" class="form-control form-kat @error('kategori') is-invalid @enderror" name="kategori" placeholder="description" rows="5" value="{{old('kategori')}}">
            @error('kategori')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <h4 class="box">PICTURE</h4>
            <input type="file" id="picture" name="file" value="{{old('file')}}">
            <label for="picture">Add File</label>
            @error('file')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="right">
            <button class="btn-green" type="submit">Save</button>
        </div>
    </form>
</div>
<Script>
     CKEDITOR.replace('form-control',{
        height: 400
     });
</Script>
@endsection
