<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO | Create</title>
</head>
<body>
    <h1>Create Your TODO</h1>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" id="">
        <input type="submit" value="Create" >
    </form>
    <br>
    <a href="/index">Back</a>
</body>
</html>