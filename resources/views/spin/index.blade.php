@extends('layouts.app')

@section('title','Spin')

@section('content')
<div class="container">
    <div class="row">
        <form action="/searchSpin" method="get">
            <div class="input-group" style="width: 50%">
                <select name="genre" id="search" class="form-control" required>
                    <option value="">Select Genre</option>
                    <option value="Horror">Horror</option>
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Crime">Crime</option>
                    <option value="Mystery">Mystery</option>
                    <option value="War">War</option>
                </select>

                <select name="rating" id="search" class="form-control" required>
                    <option value="">Select Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <br>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="Type" style="color: white;">Type</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="search" value="Movies" name="type">
                <label class="form-check-label" for="Movies" style="color: white;">Movies</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="search" value="TVx   Show" name="type">
                <label class="form-check-label" for="TV Show" style="color: white;">TV Show</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info">SPIN</button>
                <a href="/spin" class="btn btn-primary my-3" style="background-color: #035aa6; color: white;">Reset</a>
            </div>
        </form>
    </div>
    <br></br>
    <div class="row row-cols-2 row-cols-md-3">
        @foreach($review as $review)
        <div class="row">
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 300px;">
                    <div class="card-header" style="background-color: black">
                        <img src="/picture/{{$review->picture}}" style="height: 160px;">
                    </div>
                    <div class="card-body" style="text-align: left; background-color: black">
                        <h5 class="card-title" style="text-align: center">{{$review->name_film}}</h5>
                        <p class="card-text">Genre : {{$review->genre}}</p>
                        <p class="card-text">Rating : {{$review->rating}}</p>
                        <a href="/review/{{$review->id}}" class="badge">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection