@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>History</h1>
        </div>
      </div>

     
@foreach($events as $e)
      <div class="alert alert-info"> 
        <strong><a href="{{route('events.event_details',$e->id)}}">"{{$e->title }}"</a></strong>&nbsp event post is approved by admin.
      </div>
      
@endforeach
      
@foreach($event as $ev)
      <div class="alert alert-danger">
        <strong>"{{$ev->tittle }}"</strong>&nbsp event post is declined/deleted.
      </div>
@endforeach  

    </main>
  @endsection

@section('title')
Notificatons
@endsection