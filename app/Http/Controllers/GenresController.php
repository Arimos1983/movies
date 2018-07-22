<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre',$genre)->get();
        $latest_movies= Movie::orderByDesc("id")->take(2)->get();
        return view('/index', compact('movies','latest_movies'));
    }
}
