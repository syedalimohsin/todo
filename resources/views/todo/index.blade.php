<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO | Home</title>
</head>
<body>
    <h1>All your TODOs</h1>
    <h3> <a href="/create">Create More Todo</a></h3>
    @foreach ($todos as $todo)
    <li>
        {{ $todo->title }}
        <a href="{{ asset('/'.$todo->id.'/edit') }}">Edit</a>
    </li>
    @endforeach
</body>
</html>