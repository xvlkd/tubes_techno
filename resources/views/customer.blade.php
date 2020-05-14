<!DOCTYPE html>
<html>
<head>
	<title>MiFi Customer Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
		<br>
			<h4>MiFi Customer Data</h4>
		</center>
		<br/>
		<div class="row">
        <div class="col-6">
            <!-- <form action="/customer/cari" method="get">
                <div class="input-group">
                    <input type="text" name="search">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form> -->
        </div>
    </div>
	
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Telephone (+62)</th>
					<th>Job</th>
					<th>Option</th>
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
					<td>
					<a href="/customer/edit/{{ $p->id }}">Edit</a>
					|
					<a href="/customer/hapus/{{ $p->id }}">Delete</a>
			</td>
				</tr>
				@endforeach
			</tbody>
			<br><br>
		</table>
		<br><br>
		<a href="/customer/tambah" class="btn btn-primary" target="_blank"> Add New Customer</a>
		<a href="/customer/cetak_pdf" class="btn btn-primary" target="_blank">PRINT PDF</a>
		<br><br>
		<br>
	<a href="/review"> Back </a>
	</div>
	
</body>
</html>