@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>

        <p>{{$post->content}}</p>

        <small>Aggiornato il: {{$post->updated_at}}</small> <br>
        <small>Autore: {{$post->user->name}}</small> <br>

        @foreach ($post->tags as $tag)
          <a href="#" class="badge badge-info">{{$tag->name}}</a>
        @endforeach



          <div class="mt-5">
            <h4>Leave a comment below</h3>
            <form class="form-group" action="{{route('posts.store')}}" method="post">
              @csrf
              @method('POST')
              <input type="hidden" name="post_id" value="{{$post->id}}">
              <input type="hidden" name="slug" value="{{$post->slug}}">
              <input class="form-control" type="text" placeholder="name" name="name" value="">
              <input class="form-control mt-2" type="email" placeholder="email" name="email" value="">
              <input class="form-control mt-2" type="text" placeholder="title" name="title" value="">
              <textarea class="form-control mt-2" placeholder="content..." name="content" rows="8" cols="80"></textarea>
              <button class="btn btn-primary mt-2" type="submit" name="">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
          <div class="row">
            <div class="col-12">
              @foreach ($comments as $comment)
                <div class="card mt-4">
                  <div class="card-header">
                    <h5 class="card-title">{{$comment->title}}</h5>
                    <h6>{{$comment->name}}</h6>
                    <p>{{$comment->email}}</p>
                  </div>
                <div class="card-body">
                  <p>{{$comment->content}}</p>
                  <small>{{$comment->updated_at}}</small>
                </div>
              </div>
              @endforeach
            </div>

          </div>




  </div>


@endsection
