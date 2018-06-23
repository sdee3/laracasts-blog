@extends('layouts.app') 
@section('content')
<ul class="list-group">
  @foreach ($posts as $post)
  <a href="/tasks/{{ $post->id }}">
    <li class="list-group-item">{{$post->body}}</li>
  </a>
  @endforeach
</ul>
@endsection