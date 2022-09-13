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
    <a href="{{route('home')}}">Home</a>&nbsp&nbsp
    @auth<a href="{{route('auth.logout')}}">Logout</a>@endauth
</body>
</html>
