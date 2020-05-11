<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-6">
<html>
<head>
	<title>Tambah Data Customer</title>
</head>
<body>

	<h3>Data Customer</h3>

	<a href="/customer"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/customer/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama" style="color: white">Nama</label>
			<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama anda disini" name="nama" value="{{ old('nama') }}"> <br/>
			<div class="invalid-feedback">
                Nama Tidak Boleh Kosong!
            </div>
		</div>

		<div class="form-group">
        <label for="email" style="color: white">Email</label>
			<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukkan email anda disini" name="email" value="{{ old('email') }}"> <br/>
			<div class="invalid-feedback">
                Email Tidak Boleh Kosong!
            </div>
		</div>

		<div class="form-group">
		<label for="alamat" style="color: white">Alamat</label>
			<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="masukkan alamat anda disini" name="alamat" value="{{ old('alamat') }}"> <br/>
			<div class="invalid-feedback">
                Alamat Tidak Boleh Kosong!
            </div>
		</div>

		<div class="form-group">
		<label for="telepon" style="color: white">Telepon</label>
			<input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" placeholder="masukkan nomor telepon anda disini" name="telepon" value="{{ old('telepon') }}"> <br/>
			<div class="invalid-feedback">
                Telepon Tidak Boleh Kosong!
            </div>
		</div>

		<div class="form-group">
		<label for="pekerjaan" style="color: white">Pekerjaan</label>
			<input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="masukkan peekrjaan anda disini" name="pekerjaan" value="{{ old('pekerjaan') }}"> <br/>
			<div class="invalid-feedback">
                Pekerjaan Tidak Boleh Kosong!
            </div>		
			</div>
		<input type="submit" value="Simpan Data" class="btn btn-primary" target="_blank">
	</form>

</body>
</html>
</div>
</div>
</div>
@endsection