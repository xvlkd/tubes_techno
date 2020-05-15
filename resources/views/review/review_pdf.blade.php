<!DOCTYPE html>
<html>
<head>
	<title>data film</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">//
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		
	</style>
	<center>
		<h5>data film</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>no</th>
				<th>title</th>
				<th>genre</th>
				<th>type</th>
				<th>rating</th>
				<th>review</th>
				<th>poster</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($review as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->title}}</td>
				<td>{{$p->genre}}</td>
				<td>{{$p->type}}</td>
				<td>{{$p->rating}}</td>
				<td>{{$p->review}}</td>
				<td><img src="../../picture{{$p->picture}}"</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>