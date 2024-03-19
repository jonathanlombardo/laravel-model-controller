@extends('layouts.main')

@section('maincontent')
<main>
  <div class="container text-center">
    <h1 class="my-3">{{$movie->title}}</h1>
      <ul class="list-group list-group-flush my-3">
        <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">original title:</span><span>{{$movie->original_title}}</span></li>
        <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">nationality:</span><span>{{$movie->nationality}}</span></li>
        <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">date:</span><span>{{$movie->date}}</span></li>
        <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">vote:</span><span>{{$movie->vote}}</span></li>
      </ul>
  </div>
</main>
@endsection