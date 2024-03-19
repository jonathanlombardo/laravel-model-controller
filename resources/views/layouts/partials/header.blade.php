<header class="py-3">
  <div class="container d-flex justify-content-between align-items-center">

    <span>{{env('APP_NAME')}} Header</span>
    <nav>
      <ul class="d-flex align-items-center gap-3">
        <li><a href="{{ route('movie.index') }}">Movies</a></li>
      </ul>
    </nav>
  </div>
</header>