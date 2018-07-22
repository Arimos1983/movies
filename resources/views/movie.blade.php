@extends('layouts.master')


@section('content')
<div>
    <p>Movie title: {{ $movie->title }}</p>
    <p>Genre: <a href="{{'/genres/'.$movie->genre}}">{{ $movie->genre }}</a></p>
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
<div class="container">
    <h4>Post comment.</h4>
    <form method="POST" action="{{'/comments/add/'.$movie->id}}">
        {{ csrf_field() }}
        <div>
            <label for="content">Comment</label>
            <textarea name="content" class="form-control" id="content"></textarea>
            @include("partials.error", ["fieldName" => "content"])
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
