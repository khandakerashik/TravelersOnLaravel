@extends('freaks.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Notifications</h1>
        </div>
      </div>

      
      @foreach($comment as $c)

      <div class="alert alert-dark">
        <strong><a href="{{route('blogs.blog_details',$c->postid)}}">"{{$c->name}}" </a> </strong>&nbsp  Comment on your post .
      </div>

      @endforeach


    </main>
@endsection

@section('title')
Notifications
@endsection