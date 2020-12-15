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
            <div class="row">
                <div class="col-6">
                    <a href="/artikel/export_excel" class="btn btn-light form-search my-3" target="_blank">EXPORT EXCEL</a>
                </div>
                <div class="col my-auto">
                    
                    <form class="form-inline float-right align-middle my-auto " action="{{route('searchArtikel')}}" method="GET">
                        <input type="text" class="form-control form-search mr-sm-2" name="search" placeholder="Search" aria-label="Search" value="{{ old('search') }}">
                        <button class="btn btn-light form-search" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    @if(session()->has('searched'))
                        <a href="{{route('artikel')}}" class="btn btn-light form-search float-right" style="margin-right:2.5%"><i class="fas fa-redo-alt"></i></a>
                        @php Session::forget('searched') @endphp
                    @endif
                </div>
            </div>
            
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
                    <td colspan="5" class="text-center">Data Artikel Tidak Ada...</td>
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