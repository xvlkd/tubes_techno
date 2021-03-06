@extends('layouts.app')

@section('title','Review')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-6">
            <form action="/searchReview" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" >
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary" style="background-color: #035aa6; color: white;">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>


    <a href="/review/create" class="btn btn-primary my-3">Add Review</a>
    <a href="/review" class="btn btn-primary my-3" style="background-color: #035aa6; color: white;">
        <i class="material-icons" style="text-align: center">refresh</i>
    </a>
    <a href="/index/cetak_pdf" class="btn btn-primary my-3" style="background-color: green; color: white;">
        <i class="material-icons">print</i>
    </a>
    <br></br>
    <div class="row row-cols-2 row-cols-md-3">
        @foreach($review as $review)
        <div class="row">
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 300px;">
                    @if($review->picture != NULL)
                    <div class="card-header" style="background-color: black">
                        <img src="/picture/{{$review->picture}}" style="height: 160px;">
                    </div>
                    @elseif($review->picture == 'default-image.jpg')
                    <div class="card-header" style="background-color: black">
                        <img src="{{ ('picture/default-image.jpg') }}">
                    </div>
                    <!--<img url('/picture/default-image.jpg'); style="height: 160px;"> -->
                    @endif

                    <div class="card-body" style="text-align: left; background-color: black">
                        <h5 class="card-title" style="text-align: center">{{$review->name_film}}</h5>
                        <p class="card-text">Genre : {{$review->genre}}</p>
                        <p class="card-text">Rating : {{$review->rating}}</p>
                        <a href="/review/{{$review->id}}" class="badge badge-info">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection