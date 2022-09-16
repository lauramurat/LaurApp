<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>All posts</title>
    </head>
<body>
<a href="{{ route('posts.create') }}">Go to Create page</a>
<h3>{{$post->title}}</h3>
  <p>{{$post->content}}</p>

 <a href="{{route('posts.edit', $post->id)}}">Edit</a>
</body>
</html>
