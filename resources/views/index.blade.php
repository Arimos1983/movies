<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>
    </head>
    <body>
    @foreach($movies as $movie)
    <a href="{{'/movies/'.$movie->id}}">
    <li>{{ $movie->title }}</li>
    </a>
    <li>{{ $movie->storyline }}</li><hr>
    
    @endforeach
    </body>
</html>
