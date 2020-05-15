<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-6">
<html>
<head>
	<title>Add Customer Data</title>
</head>
<body>

	<h3>Add Customer Data</h3>

	<a href="/customer"> Back</a>
	
	<br/>
	<br/>

	<form action="/customer/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama" style="color: white">Name</label>
			<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="put your name here" name="nama" value="{{ old('nama') }}"> <br/>
			<div class="invalid-feedback">
                Name can't be empty!
            </div>
		</div>

		<div class="form-group">
        <label for="email" style="color: white">Email</label>
			<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="put your email here" name="email" value="{{ old('email') }}"> <br/>
			<div class="invalid-feedback">
                Email can't be empty!
            </div>
		</div>

		<div class="form-group">
		<label for="alamat" style="color: white">Address</label>
			<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="put your address here" name="alamat" value="{{ old('alamat') }}"> <br/>
			<div class="invalid-feedback">
                Address can't be empty!
            </div>
		</div>

		<div class="form-group">
		<label for="telepon" style="color: white">Telephone</label>
			<input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" placeholder="put your telephone number here" name="telepon" value="{{ old('telepon') }}"> <br/>
			<div class="invalid-feedback">
                Telephoe number can't be empty!
            </div>
		</div>

		<div class="form-group">
		<label for="pekerjaan" style="color: white">Job</label>
			<input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="put your job here" name="pekerjaan" value="{{ old('pekerjaan') }}"> <br/>
			<div class="invalid-feedback">
                Job can't be empty!
            </div>		
			</div>
		<input type="submit" value="Add Customer" class="btn btn-primary" target="_blank">
	</form>

</body>
</html>
</div>
</div>
</div>
@endsection