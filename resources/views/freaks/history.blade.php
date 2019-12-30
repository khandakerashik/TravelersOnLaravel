@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>History </h1>
        </div>
      </div>

      
      @foreach($booking as $b)

      <div class="alert alert-warning">
        <strong><a href="{{route('events.event_details',$b->eventid)}}">"THIS EVENT " </a> </strong>&nbsp You Have to Register at {{$b->date}}
      </div>
      @endforeach
        
        
      @foreach($comment as $c)

      <div class="alert alert-secondary">
        <strong><a href="{{route('blogs.blog_details',$c->postid)}}">"COMMENT" </a> </strong>&nbsp You posted a Comment at {{$c->date}}.
      </div>
      @endforeach
        
      @foreach($notification as $n)

      <div class="alert alert-primary">
        <strong><a href="{{route('events.event_details',$n->eventid)}}">"REPORT" </a> </strong>&nbsp to Admin on  {{$n->date}}
      </div>
      @endforeach
        

    </main>

@endsection

@section('title')
History
@endsection