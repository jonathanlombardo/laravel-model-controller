<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
  public function index()
  {
    $movies = Movie::select('id', 'title', 'vote')->get();
    // dd($movies);
    return view('movie.index', compact('movies'));
  }

  public function show(Movie $movie)
  {
    return view('movie.show', compact('movie'));
  }
}
