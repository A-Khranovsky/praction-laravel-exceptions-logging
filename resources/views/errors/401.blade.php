<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Unathorized</title>
    <meta charset="utf-8">
</head>
<body>
<h3>401 | UNAUTHORIZED</h3>
<div>{{$message ?? ''}}</div><br />
<a href="{{route('auth')}}">Login</a>
</body>
</html>
