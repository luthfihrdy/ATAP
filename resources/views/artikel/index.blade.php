@extends('layouts.navadmin')
@section('content')
<div class="content">
    @if(session()->has('pesan'))
        <div class="alert alert-success">
            {{session()->get('pesan')}}
        </div>
    @endif
    <!--content table-->
    <div class="content-table">
        <div class="margin">
            <div class="title">
                <h5>Articles</h5>
                <a href="{{route('add')}}"><button class="btn-green">Add New Article</button></a>
            </div>
            <a href="/artikel/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            <table class="table table-borderless display" id="MyData">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Date Post</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Views</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($artikel as $data)
                <tr>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->views}}</td>
                    <td><a href="{{route('edit',['artikel'=>$data->id_artikel])}}"><button class="btn-green">EDIT</button></a></td>
                </tr>
                @empty
                    <td colspan="4" class="text-center">Data Mahasiswa Tidak Ada...</td>
                @endforelse

                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    $(document).ready( function () {
        $('#MyData').DataTable();
    } );
</script>



@endsection