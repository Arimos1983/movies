@extends('layouts.master')


@section('content')

<form action="/movies" method="POST" class="container">

    {{ csrf_field() }}

    

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" >
        @include("partials.error", ["fieldName" => "title"])
    </div>
    <div>
        <label for="genre">Genre</label>
        <input name="genre" type="text" class="form-control" id="genre" >
        @include("partials.error", ["fieldName" => "genre"])
    </div>
    <div>
        <label for="director">Director</label>
        <input name="director" type="text" class="form-control" id="director" >
    </div>
    <div>
        <label for="year">Year</label>
        <input name="year" type="integer" class="form-control" id="year" >
        @include("partials.error", ["fieldName" => "year"])
    </div>
    <div class="form-group">
        <label for="storyline">Storyline</label>
        <textarea name="storyline" class="form-control" id="storyline"></textarea>
        @include("partials.error", ["fieldName" => "storyline"])    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection