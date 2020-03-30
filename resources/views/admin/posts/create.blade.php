@extends('layouts.app')

@section('content')
   <form class="form-group" action="{{route('admin.posts.store')}}" method="post">
     @csrf
     @method('POST')
     <label for="title">TITLE</label>
     <input class="form-control" type="text" name="title" value="">
     <label for="content">TEXT</label>
     <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
     <button type="submit" class="btn btn-primary" name="button">INVIO</button>
   </form>
@endsection
