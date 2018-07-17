<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('/index', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::all()->find($id);
        return view('/movie', compact('movie'));
    }
}