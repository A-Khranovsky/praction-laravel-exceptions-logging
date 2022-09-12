<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    @yield('content')
    <br /><br /><a href='{{url("/post/{$prev}")}}'><-Previous</a>&nbsp&nbsp
    <a href='{{url("/post/{$next}")}}'>Next-></a>&nbsp&nbsp
    <a href="/">Home</a>&nbsp&nbsp
</body>
</html>
