@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        @foreach ($posts as $post)
          <div class="card mt-3">
            <div class="card-header">
              <a href="{{route('posts.show', $post->slug)}}"><h2 class="card-title">{{$post->title}}</h2></a>
            </div>
            <div class="card-body">
              <p>{{$post->content}}</p>
              @foreach ($post->tags as $tag)
                <a href="#" class="badge badge-info">{{$tag->name}}</a>
              @endforeach
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>

@endsection
