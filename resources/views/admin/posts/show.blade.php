@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>

        <p>{{$post->content}}</p>

        <small>{{$post->updated_at}}</small> <br>
        <small>{{$post->user->name}}</small> <br>

        <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
        <a class="btn btn-danger" href="{{route('admin.posts.destroy', $post->slug)}}">DELETE</a>

      </div>
    </div>
  </div>


@endsection
