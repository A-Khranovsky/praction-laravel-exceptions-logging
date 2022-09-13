<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Posts</title>
    <meta charset="utf-8">
</head>
<body>
    <p><strong>Posts&nbsp|&nbsp
            @auth<a href="{{route('auth.logout')}}">Logout</a>@endauth</strong></p>
    @foreach($posts as $post)
        <a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a><br />
    @endforeach
</body>
</html>
