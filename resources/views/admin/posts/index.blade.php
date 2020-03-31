@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="btn btn-primary mb-3" href="{{route('admin.posts.create')}}">NEW POST</a>

        @foreach ($posts as $post)
          <a href="{{route('admin.posts.show', $post->slug)}}"><h2>{{$post->title}}</h2></a>

          <p>{{$post->content}}</p>

          @foreach ($post->tags as $tag)
            <small class="btn btn-info">{{$tag->name}}</small>
          @endforeach
        @endforeach

      </div>
    </div>
  </div>

@endsection
