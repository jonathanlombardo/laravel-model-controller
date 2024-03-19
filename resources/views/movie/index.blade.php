@extends('layouts.main')

@section('title', 'List')

@section('maincontent')
<main>
  <div class="container">
    <h1 class="text-center my-3">Movies</h1>
    <div class="row row-cols-5 g-5 my-3">

      @forelse($movies as $movie)
      <div class="col">
        <div class="card h-100">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Vote: {{$movie->vote}}</h6>
            <a href="{{ route('movie.show', $movie) }}" class="card-link mt-auto">See More...</a>
          </div>
        </div>
      </div>

      @empty
      <div class="col-12">
        <h2>No results</h2>
      </div>
      @endforelse

    </div>
  </div>
</main>
@endsection