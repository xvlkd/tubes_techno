<!DOCTYPE html>
<html>
<head>
	<title>MiFi Review Report</title>
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
		<br><h5>MiFi Review Report</h4><br>
	</center>
		<br>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Genre</th>
				<th>Type</th>
				<th>Rating</th>
				<th>Review</th>
				<!-- <th>Image</th> -->
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($review as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name_film}}</td>
				<td>{{$p->genre}}</td>
				<td>{{$p->type}}</td>
				<td>{{$p->rating}}</td>
				<td>{{$p->review}}</td>
				<!-- <td><img src="/picture/{{$p->picture}}"></td> -->
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>