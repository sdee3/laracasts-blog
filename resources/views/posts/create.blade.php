@extends('layouts.app') 
@section('content')
<h1>Create a post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

<div class="form-group">

  {{ Form::label('title', 'Title') }}
  {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

</div>

{!! Form::close() !!}
@endsection