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
          
        </div>

      </div>
    </div>
  </div>


@endsection
