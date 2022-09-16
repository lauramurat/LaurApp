<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
<body class="antialiased">
<div>
<a href="{{ route('posts.create') }}">Go to Create page</a>
</div>
@foreach($posts as $post)
    <a href="{{route('posts.show', $post->id)}}"><h3>{{$post->title}}</h3></a>
    <p>{{$post->content}}</p>

    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>

    </form>
@endforeach

</body>
</html>
