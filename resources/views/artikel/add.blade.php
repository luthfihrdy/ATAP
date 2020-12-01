@extends('layouts.navadmin')
@section('content')

<div class="add">
    <h1>ADD NEW ARTICLE</h1>
    <form>
        <div class="form-group">
            <h4 class="box">TITLE</h4>
            <textarea type="text" class="form-control" name="title" placeholder="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <h4 class="box">Planting</h4>
            <textarea type="text" class="form-control" name="planting" placeholder="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <h4 class="box">PREPARING THE PLANTING SITE</h4>
            <textarea type="text" class="form-control" name="prepare" placeholder="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <h4 class="box">HOW TO PLANT POTATOES</h4>
            <textarea type="text" class="form-control" name="how" placeholder="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <h4 class="box">FUN FACT!</h4>
            <textarea type="text" class="form-control" name="fun" placeholder="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <h4 class="box">PICTURE</h4>
            <input type="file" id="picture" name="picture">
            <label for="picture">Add File</label>
        </div>

        <div class="right">
            <button class="btn-green">Save</button>
        </div>
    </form>
</div>
<Script>
     CKEDITOR.replaceAll('form-control');
     CKEDITOR.config.width('')
     CKEDITOR.config.removeButtons = 'Link';
</Script>
@endsection
