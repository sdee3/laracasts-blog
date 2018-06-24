@extends('layouts.app') 
@section('content')
<ul class="list-group">
  @foreach ($posts as $post)
  <a href="/posts/{{ $post->id }}">
    <li class="list-group-item">{{$post->title}}</li>
  </a>
  @endforeach
</ul>
@endsection