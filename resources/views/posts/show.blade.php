@extends('layouts.app') 
@section('content')
<h1>{{ $post->title }}</h1>
<h4>Created on {{ $post->created_at->toFormattedDateString() }}</h4>
<hr>
<div>
  {!!$post->body!!}
  <hr>
  <div class="comments">
    <h5>Comments</h5>
    <ul class="list-group">
      @foreach ($post->comments as $comment)
        <li class="list-group-item">
          <strong>
            {{ $comment->created_at->diffForHumans() }}: 
          </strong>
          {{ $comment->body }}
        </li>
      @endforeach
    </ul>
  </div>

  <div class="card mt-5">
    <div class="card-block">
      <form method="POST" action="/posts/{{$post->id}}/comments">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add comment</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection