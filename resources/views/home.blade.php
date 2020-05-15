@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <br>
            <!-- <div class="card">
                <a class="badge" href="{{ url('/review') }}">Review</a>
                <a class="badge" href="{{ url('/spin')}}">Spin</a>
                <a class="badge" href="{{ url('/customer')}}">Customer</a>
            </div> -->
        </div>
    </div>
</div>
@endsection
