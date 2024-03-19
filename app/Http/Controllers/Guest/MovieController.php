<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
  public function index(Request $request)
  {
    $searchedTerm = $request->input('search') ?? '';
    $movies = Movie::select('id', 'title', 'vote')->where('title', 'LIKE', "%$searchedTerm%")->get();

    return view('movie.index', compact('movies', 'searchedTerm'));
  }

  public function show(Movie $movie)
  {
    return view('movie.show', compact('movie'));
  }
}
