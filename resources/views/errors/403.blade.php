<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Forbidden</title>
    <meta charset="utf-8">
</head>
<body>
<h3>403 | FORBIDDEN</h3>
<div>{{$message ?? ''}}</div><br />
<a href="{{url()->previous()}}">Back</a>
</body>
</html>
