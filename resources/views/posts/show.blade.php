@extends('layouts.app') 
@section('content')
<h1>{{ $post->title }}</h1>
<h4>Created on {{ $post->created_at->toFormattedDateString() }}</h4>
<hr>
<div>
  {!!$post->body!!}
</div>
@endsection