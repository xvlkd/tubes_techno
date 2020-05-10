<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Customer MiFi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
		<br><br>
			<h4>Laporan Data Customer MiFi</h4>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Pekerjaan</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($customer as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->alamat}}</td>
					<td>{{$p->telepon}}</td>
					<td>{{$p->pekerjaan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="/customer/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<br><br>
	</div>

</body>
</html>