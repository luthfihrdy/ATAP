@extends('layouts.navadmin')
@section('content')

<div class="add">
    <h1>EDIT ARTICLE</h1>
    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" value="{{Auth::user()->id_akun}}" name="id_akun" hidden>
        <div class="form-group">
            <h4 class="box">TITLE</h4>
            <input type="text" class="form-control form-kat" name="judul" placeholder="description" rows="5" value="{{$result->judul}}">
        </div>
        <div class="form-group">
            <h4 class="box">CONTENT</h4>
            <textarea type="text" id="form-control" class="form-control" name="konten" placeholder="CONTENT" rows="10">{!! $result->content !!}</textarea>
        </div>
        <div class="form-group">
            <h4 class="box">FUN FACT!</h4>
        <input type="text" class="form-control form-kat" name="funfact" placeholder="description" value="{{ $result->funfact}}">
        </div>
        <div class="form-group">
            <h4 class="box">CATEGORY</h4>
            <input type="text" class="form-control form-kat" name="kategori" placeholder="description" rows="5" value="{{ $result->kategori}}">
        </div>
        <div class="form-group">
            <h4 class="box">PICTURE</h4>
            <input type="file" id="picture" name="file">
            <label for="picture">Add File</label>
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
