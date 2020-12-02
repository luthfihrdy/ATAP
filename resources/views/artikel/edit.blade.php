@extends('layouts.navadmin')
@section('content')

<div class="add">
    <h1>EDIT ARTICLE</h1>
    <form action="{{ route('update',['artikel'=>$result->id_artikel])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_artikel" value="{{$result->id_artikel}}">
        <div class="form-group">
            <h4 class="box">PICTURE</h4>
            <center><img src="{{asset('asset/images/'.$result->nama_file)}}" style="width: 50%;"></center>
            <input type="hidden" value="{{$result->nama_file}}" name="file_name">
            <input type="file" id="picture" name="file">
            <center><br/><label for="picture">Edit Picture</label></center>
        </div>

        <input type="text" value="{{Auth::user()->id_akun}}" name="id_akun" hidden>
        <div class="form-group">
            <h4 class="box">TITLE</h4>
            <input type="text" class="form-control form-kat @error('judul') is-invalid @enderror" name="judul" placeholder="description" rows="5" value="{{old('judul') ?? $result->judul}}">
        </div>
        <div class="form-group">
            <h4 class="box">CONTENT</h4>
            <textarea type="text" id="form-control" class="form-control @error('konten') is-invalid @enderror" name="konten" placeholder="CONTENT" rows="10">{!!old('konten') ?? $result->content !!}</textarea>
        </div>
        <div class="form-group">
            <h4 class="box">FUN FACT!</h4>
        <input type="text" class="form-control form-kat @error('funfact') is-invalid @enderror" name="funfact" placeholder="description" value="{{old('funfact') ?? $result->funfact}}">
        </div>
        <div class="form-group">
            <h4 class="box">CATEGORY</h4>
            <input type="text" class="form-control form-kat @error('kategori') is-invalid @enderror" name="kategori" placeholder="description" rows="5" value="{{old('kategori') ?? $result->kategori}}">
        </div>
        <div class="left">
            <a class="btn-red" href="#">Delete</a>
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
