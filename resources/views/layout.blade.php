<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>João Vilaça | Web Developer | Blogger</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @yield('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>

    @include('partials/navbar')

    <div class="main">
      @yield('content')
    </div>

    @include('partials/footer')

  </body>
</html>
