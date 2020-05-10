@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="/searchSpin" method="get">
                <div class="input-group">
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
                    <option value="">Select rating</option>
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
                <div class="form-group" align="center">
                     <button type="submit" class="btn btn-info">Filter</button>
                     <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                
            </form>
        </div>
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
                        <a href="/review/{{$review->id}}" class="badge badge-info" style="background:#df7861;">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
