<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Not found</title>
    <meta charset="utf-8">
</head>
<body>
<h3>404 | NOT FOUND</h3>
<div>{{$message}}</div><br />
<a href="{{route('home')}}">Home</a>&nbsp&nbsp<a href="{{url()->previous()}}">Back</a>
</body>
</html>
