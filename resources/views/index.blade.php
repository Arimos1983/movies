
@extends('layouts.master')

@section('content')
<div>
    <ul>
    @foreach($movies as $movie)
        <a href="{{'/movies/'.$movie->id}}">
        <li>{{ $movie->title }}</li>
        </a>
        <li>{{ $movie->storyline }}</li><hr>
    @endforeach
    </ul>
</div>
@endsection

