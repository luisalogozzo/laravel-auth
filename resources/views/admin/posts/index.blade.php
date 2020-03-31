@extends('layouts.app')

@section('content')
  @foreach ($posts as $post)
    <a href="{{route('admin.posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a>

    <p>{{$post->content}}</p>
  @endforeach
@endsection
