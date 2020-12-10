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
                <a href="{{route('graph')}}"><button class="btn-green">Graph</button></a>
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
                    <td colspan="4" class="text-center">Data Mahasiswa Tidak Ada...</td>
                @endforelse

                </tbody>
            </table>
        </div>

        <div class="margin">
            <div class="title">
                <h5>Articles</h5>
                <a href="{{route('add')}}"><button class="btn-green">Add New Article</button></a>
                <a href="{{route('graph')}}"><button class="btn-green">Graph</button></a>
            </div>
            <table class="table table-borderless display" id="MyData">
                        <div id="graph">

        </div>


                </tbody>
            </table>
        </div>

        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
            Highcharts.chart('graph', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Laporan Total Views Artikel'
                },
                subtitle: {
                    text: 'ATAP'
                },
                xAxis: {
                    categories: {!!json_encode($namaArtikel)!!},
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Viewers'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'view',
                    data: [<?php echo join($totalView, ',') ?>]
    
                }]
    });
                  
        </script>
    
    </div>

</div>


@endsection