@extends('layouts.master')


@section('content')
<div>
    <p>Movie title: {{ $movie->title }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Director: {{ $movie->director }}</p>
    <p>Year: {{ $movie->year }}</p>
    <p>Storyline: {{ $movie->storyline }}</p>
</div>

@endsection
