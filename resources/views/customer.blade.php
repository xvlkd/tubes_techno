<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Customer MiFi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
		<br>
			<h4>Laporan Data Customer MiFi</h4>
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
					<th>Nama</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon (+62)</th>
					<th>Pekerjaan</th>
					<th>Opsi</th>
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
					<a href="/customer/hapus/{{ $p->id }}">Hapus</a>
			</td>
				</tr>
				@endforeach
			</tbody>
			<br><br>
		</table>
		<br><br>
		<a href="/customer/tambah" class="btn btn-primary" target="_blank"> Tambah Customer Baru</a>
		<a href="/customer/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<br><br>
		<br>
	<a href="/review"> Kembali </a>
	</div>
	
</body>
</html>