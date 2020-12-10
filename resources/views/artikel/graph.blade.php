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
        <div id="graph">

        </div>
    </div>
<script>
    $(document).ready( function () {
        $('#MyData').DataTable();
    } );
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
<!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>
    Highcharts.chart('graph', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Total Views Artikel'
    },
    subtitle: {
        text: 'Source: http://atap.rf.gd/'
    },
    xAxis: {
        categories: {!!json_encode($namaArtikel)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total View'
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
        name: 'View',
        data: [<?php echo join($totalView, ',') ?>]

    }]
});
      
</script>

@endsection