
@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-sm-8 blog-main">
    <ul>
    @foreach($movies as $movie)
        <a href="{{'/movies/'.$movie->id}}">
        <li>{{ $movie->title }}</li>
        </a>
        <li>{{ $movie->storyline }}</li><hr>
    @endforeach
    </ul>
</div>
@include('layouts.sidebar')
</div>
@endsection



