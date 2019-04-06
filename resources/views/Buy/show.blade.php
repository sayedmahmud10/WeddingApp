@extends('layouts.app')


@section('content')
   <h1> Posts</h1>
     @foreach ($post as $post)
   <div class="well">
     <div class="row">
       <div class="col-md-4 col-sm-4">
       <img style ="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
       </div>
       <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
     <small>written on{{$post->created_at}}</small>

   </div>
   @endforeach
   
@endsection