<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

</head>

<body>
  <ul>
    @foreach ($tasks as $task)
    <a href="/tasks/{{ $task->id }}">
      <li>{{$task->body}}</li>
    </a>
    @endforeach
  </ul>
</body>

</html>