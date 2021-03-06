<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<html>

			<body>

				<h4><a href="/customer">Back</a></h4> <br>
				<h3>Edit Customer</h3>

				@foreach($customer as $p)
				<form action="/customer/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->id }}"> <br />
					<div class="form-group">
						<label for="nama" style="color: white">Name</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="put your name here" name="nama" value="{{ $p->nama }}"> <br />
						<div class=" invalid-feedback">
							Name can't be empty!
						</div>


						<div class="form-group">
							<label for="email" style="color: white">Email</label>
							<input disabled type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="put your email here" name="email" value="{{ $p->email }}"> <br />
							<div class="invalid-feedback">
								Email can't be empty!
							</div>
						</div>

						<div class="form-group">
							<label for="alamat" style="color: white">Alamat</label>
							<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="put your address here" name="alamat" value="{{ $p->alamat }}"> <br />
							<div class="invalid-feedback">
								Address can't be empty!
							</div>
						</div>

						<div class="form-group">
							<label for="telepon" style="color: white">Telephone</label>
							<input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" placeholder="put your telephone number here" name="telepon" value="{{ $p->telepon }}"> <br />
							<div class="invalid-feedback">
								Telephone number can't be empty!
							</div>
						</div>

						<div class="form-group">
							<label for="pekerjaan" style="color: white">Job</label>
							<input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="put your job here" name="pekerjaan" value="{{ $p->pekerjaan }}"> <br />
							<div class="invalid-feedback">
								Job can't be empty!
							</div>
						</div>
						<input type="submit" value="Edit Customer" class="btn btn-primary" target="_blank" style="background-color: #035aa6; color: white;">
				</form>
				@endforeach

			</body>

			</html>
		</div>
	</div>
</div>
@endsection