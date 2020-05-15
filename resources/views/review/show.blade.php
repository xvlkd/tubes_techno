@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4><a href="/review" class="card-link">Back</a></h4>
            <h1 class="mt-4">Detail Review</h1>
            <div class="card">
                <div class="card-header" style="background-color: black">
                    <img src="/picture/{{$review->picture}}" style="height: 160px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$review->name_film}}</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Genre : {{$review->genre}}</h6>
                    <h6 class="card-subtitle mb-4 text-muted">Rating : {{$review->rating}}</h6>
                    <h6 class="card-subtitle mb-4 text-muted">Type : {{$review->type}}</h6>
                    <h6 class="card-subtitle mb-4 text-muted">Review : <br> {{$review->review}}</h6>
                    <a href="/review/cetak_pdf" class="btn btn-primary" target="_blank">PRINT PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection