@extends('layouts.app')

@section('content')
   <form class="form-group" action="{{route('admin.posts.update', compact("post"))}}" method="post">
     @csrf
     @method('PATCH')
     <label for="title">TITLE</label>
     <input class="form-control" type="text" name="title" value="{{$post->title}}">
     <label for="content">TEXT</label>
     <textarea class="form-control" name="content" rows="8" cols="80">{{$post->content}}</textarea>
     @foreach ($tags as $tag)
       <label for="tag">{{$tag->name}}</label>
       <input type="checkbox" name="tag[]" value="{{$tag->id}}" {{($post->tags->contains($tag)) ? 'checked' : ' ' }}>

     @endforeach
     <button type="submit" class="btn btn-primary" name="">INVIO</button>
   </form>
@endsection
