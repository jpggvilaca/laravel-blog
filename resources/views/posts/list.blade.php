@extends ('layout')

@section ('content')

  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="/posts/{{$categorySlug}}/{{$post->slug}}">
          {{ $post->title }}
        </a>
      </li>
    @endforeach
  </ul>

@endsection
