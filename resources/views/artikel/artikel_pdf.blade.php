<!DOCTYPE html>
<html>
<head>
	<title>ATAP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Article</h4>
		<h6><a target="_blank" href="https://www.atap.rf.gd">www.atap.rf.gd</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>ID Article</th>
				<th>Article Title</th>
				<th>Date Created</th>
				<th>Posted By</th>
				<th>Views</th>
			</tr>
		</thead>
		<tbody>
			@foreach($artikel as $data)
			<tr>
                <td>{{ $data->id_artikel }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->views }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>