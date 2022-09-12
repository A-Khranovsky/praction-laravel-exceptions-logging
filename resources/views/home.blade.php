<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Posts</title>
    <meta charset="utf-8">
</head>
<body>
    <p><strong>Posts</strong></p>
    @foreach($posts as $post)
        <a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a>
        &nbsp|&nbsp
        <a href="{{route('post.show', ['id' => $post->id, 'edit' => $post->id])}}">edit</a><br />
    @endforeach
</body>
</html>
