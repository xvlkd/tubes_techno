@extends('layouts.app')

@section('title','Form Add Review')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4><a href="/review" class="card-link">Back</a></h4>
            <h1 class="mt-4">Form Add review</h1>
            <form method="POST" action="/review">
                @csrf
                <div class="form-group">
                    <label for="name_film" style="color: white">Title</label>
                    <input type="text" class="form-control @error('name_film') is-invalid @enderror" id="name_film" placeholder="put your title here" name="name_film" value="{{ old('name_film') }}">
                    <div class="invalid-feedback">
                        Title can't be empty!
                    </div>
                </div>

                <div class="form-group">
                    <label for="genre" style="color: white">Genre</label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="put your genre here" name="genre" value="{{ old('genre') }}">
                    <div class="invalid-feedback">
                        Genre can't be empty!
                    </div>
                </div>

                <div class="form-group">
                    <label for="type" style="color: white">Type</label><br>
                    <select name="type" id="type" class="btn btn-sm dropdown-toggle" style="background:white; width:200px">
                        <option value="Movies">Movies</option>
                        <option value="TV Show">TV Show</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="rating" style="color: white">Rating</label><br>
                    <select name="rating" id="rating" class="btn btn-sm dropdown-toggle" style="background:white; width:200px">
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

                <div class="form-group">
                    <label for="review" style="color: white">Review</label>
                    <input type="text" class="form-control @error('review') is-invalid @enderror" id="review" placeholder="put your review here" name="review" value="{{ old('review') }}">
                    <div class="invalid-feedback">
                        Review can't be empty!
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Add Review</button>
            </form>
        </div>
    </div>
</div>
@endsection