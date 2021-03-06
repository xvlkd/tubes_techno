@extends('layouts.app')

@section('title','MiFi Customer Data')

@section('content')

<div class="container" style="background-color: whitesmoke; opacity: 92%;">
	<br>
	<h4><a href="/review" class="card-link">Back</a></h4>
	<center>
		<br>
		<h4>MiFi Customer Data</h4>
	</center>
	<br />
	<div class="row">
		<div class="col-6">
			<form action="/searchCustomer" method="get">
				<div class="input-group">
					<input type="text" name="search" style="width: 50%;">
					<span class="input-group-prepend">
						<button type="submit" class="btn btn-primary" style="background-color: #035aa6; color:white">Search</button>
					</span>
				</div>
			</form>
			<a href="/customer" class="btn btn-primary my-3" style="background-color: #035aa6; color: white;">
				<i class="material-icons">refresh</i>
			</a>
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
					<a href="/customer/edit/{{ $p->id }}" class="badge" style="background-color: green; color:white">
						<i class="material-icons">edit</i>
					</a>
					|
					<a href="/customer/hapus/{{ $p->id }}" class="badge" style="background-color: red; color:white">
						<i class="material-icons">delete</i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
		<br><br>
	</table>
	<br><br>
	<a href="/customer/tambah" class="btn btn-primary" target="_blank" style="background-color: #035aa6; color:white"> Add New Customer</a>
	<a href="/customer/cetak_pdf" class="btn btn-primary" target="_blank" style="background-color: #035aa6; color:white">PRINT PDF</a>
	<br><br>
</div>

@endsection