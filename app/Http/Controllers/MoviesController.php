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
        $movie = Movie::with('comments')->find($id);
        return view('/movie', compact('movie'));
    }
    public function create()
    {
        return view('/create');
    }
    public function store()
    {
        $this->validate(request(), [ 
            "title"=>"required",
            "genre"=>"required",
            "year"=> 'sometimes|nullable|digits:4|integer|min:1900|max:'.date('Y'),
            "storyline"=>"max:1000"
        ]);

        Movie::create(
            [
                'title' => request('title'),
                'genre' => request('genre'),
                'director' => request('director'),
                'year' => request('year'),
                'storyline' => request('storyline')
            ]
            );
            return redirect('/movies');
    }
}