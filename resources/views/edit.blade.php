@extends('layout')
@section('content')
<p><strong>{{$post->title}}</strong></p>
{{--<form method="post" action="{{route('post.edit',['id => $post->id)}}">--}}
<form method="post" action="{{route('post.edit',$post)}}">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
<textarea name="post_content" cols="80" rows="15">{{$post->content}}</textarea>
<br />
<input type="submit" value="  Edit  " />
<a href="{{route('home')}}">Home</a>
</form>
@endsection
