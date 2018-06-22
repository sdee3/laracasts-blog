@extends('layouts.app') 
@section('content')
<ul class="list-group">
  @foreach ($tasks as $task)
  <a href="/tasks/{{ $task->id }}">
    <li class="list-group-item">{{$task->body}}</li>
  </a>
  @endforeach
</ul>
@endsection