@extends ('layout')

@section ('styles')
  <link href="{{ asset('css/about.css') }}" rel="stylesheet" />
@endsection

@section ('content')

  <div class="about">
    <p>
      Born on April 1988 and originally from Portugal. Passionate about new
      technologies and always trying to improve my tools and methodology.
    </p>
    <p>
      With a Computer Science Degree and after being self-taught in web
      development for a year, starting in 2015, I've been working
      professionally along a team of developers, designers and ux'ers to craft
      and perfect web applications.
    </p>
    <p class="stack">
      Currently working with: <br/>
      Docker | Node | Webpack | JS | React
    </p>
  </div>

@endsection
