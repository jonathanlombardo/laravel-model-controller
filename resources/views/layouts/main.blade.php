<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  @yield('title', 'NewProject')    
  </title>
  @vite('resources/js/app.js')

  @yield('asset')
</head>
<body>
  @include('layouts.partials.header')
  @yield('maincontent')
  @include('layouts.partials.footer')

</body>
</html>