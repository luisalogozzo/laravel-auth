@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>

        <p>{{$post->content}}</p>

        <small>Aggiornato il: {{$post->updated_at}}</small> <br>
        <small>Autore: {{$post->user->name}}</small> <br>

        <div class="mt-5">
          <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
          <form class="" action="{{route('admin.posts.destroy', compact('post'))}}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" name="" value="DELETE">
          </form>
        </div>

      </div>
    </div>
  </div>


@endsection
