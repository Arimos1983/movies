@extends('layouts.master')


@section('content')
<div>
    <p>Movie title: {{ $movie->title }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Director: {{ $movie->director }}</p>
    <p>Year: {{ $movie->year }}</p>
    <p>Storyline: {{ $movie->storyline }}</p>
</div>
<h3>Comments:</h3>
<div>
    @foreach($movie->comments as $comment)
        {{$comment->content}}
        {{$comment->created_at}}<br><hr>
    @endforeach    
</div>

@endsection
