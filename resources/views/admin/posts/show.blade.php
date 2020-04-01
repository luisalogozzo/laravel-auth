@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="btn btn-primary mb-5" href="{{route('admin.posts.index')}}">ALL POSTS</a>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
          <section class="post_section">
            <h2>{{$post->title}}</h2>

            <p>{{$post->content}}</p>

            <small>Aggiornato il: {{$post->updated_at}}</small> <br>
            <small>Autore: {{$post->user->name}}</small> <br>

            @foreach ($post->tags as $tag)
              <a href="#" class="badge badge-info">{{$tag->name}}</a>
            @endforeach
          </section>
        </div>
      </div>

    <section class="btn-edit-delete mt-5">
          <form class="" action="{{route('admin.posts.destroy', compact('post'))}}" method="post">
            @csrf
            @method('DELETE')
            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">EDIT</a>

            <input class="btn btn-danger" type="submit" name="" value="DELETE">
          </form>
        </section>

    <section class="comment_section mt-5">
      <h4>Comments</h4>


      @foreach ($comments as $comment)
        <div class="row">
          <div class="col-12">
            {{-- card --}}
            <div class="card mt-4">
              {{-- card-header --}}
                <div class="card-header">
                  <h5 class="card-title">{{$comment->title}}</h5>
                  <h6>{{$comment->name}}</h6>
                  <p>{{$comment->email}}</p>
                </div>
              {{-- /card-header --}}

              {{-- card-body --}}
                <div class="card-body">
                <p>{{$comment->content}}</p>
                <small>{{$comment->updated_at}}</small>
               </div>
             {{-- /card-body --}}

             {{-- button delete --}}
              <div class="mb-3 ml-3">
                <form class="" action="index.html" method="post">
                  <button class="btn btn-danger" type="submit" name="">DELETE</button>
                </form>
              </div>
              {{-- /button delete --}}

          </div>
          {{-- /card --}}
        </div>
      </div>
    @endforeach

    </section>

  </div>


@endsection
