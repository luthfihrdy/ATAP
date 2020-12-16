@extends('layouts.navadmin')
@section('content')
        <div class="content">
            <div class="title">
                <svg class="svg-dash">
                    <rect class="rect-dash"></rect>
                </svg>
                <p>Dashboard</p>
            </div>
            
            <!--content card-->
            <div>
                <div class="card-deck">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">View Total</h5>
                        <p class="card-text">{{$jumlah}}</p>
                        {{-- <p class="card-text inc">increased by <span>30%</span></p> --}}
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Total Articles</h5>
                        <p class="card-text">{{count($artikel_c)}}</p>
                        {{-- <p class="card-text inc">increased by <span>100%</span></p> --}}
                      </div>
                    </div>
                  </div>
            </div>
            @if(session()->has('pesan'))
                <br>
                <div class="alert alert-success">
                    {{session()->get('pesan')}}
                </div>
            @endif
            <!--content table-->
            <div class="content-table">
                <div class="margin">
                    <div class="title">
                        <h5>Articles</h5>
                        {{-- <a href="{{route('add')}}"><button class="btn-green">Add New Article</button></a> --}}
                    </div>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date Post</th>
                            <th scope="col">Posted by</th>
                            <th scope="col">Views</th>
                            {{-- <th scope="col"></th> --}}
                        </tr>
                        </thead>
                        <tbody>
                          @forelse($artikel as $data)
                          <tr>
                              <td>{{$data->judul}}</td>
                              <td>{{$data->created_at}}</td>
                              <td>{{$data->nama}}</td>
                              <td>{{$data->views}}</td>
                              {{-- <td><a href="{{route('edit',['artikel'=>$data->id_artikel])}}"><button class="btn-green">EDIT</button></a></td> --}}
                          </tr>
                          @empty
                              <td colspan="4" class="text-center">Data Artikel Tidak Ada...</td>
                          @endforelse
                          @if(count($artikel)>=5)
                            <tr>
                              <td colspan="4" class="text-center"><a class="showMore" href="{{route('artikel')}}">Show More...</a></td>
                            </tr>
                          @endif

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
