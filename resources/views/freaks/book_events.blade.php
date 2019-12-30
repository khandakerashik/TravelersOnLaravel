@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Book Event</h1>
        </div>
      </div>

    
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                  
                <table class="table table-hover " id="sampleTable">
             
                  <thead class="thead-dark"> 
                   
                    <tr>
                      <th>Event Name</th>
                      <th>Agency Name</th>
                      <th>Booking Date</th>
                      <th>Booked Person</th>
                      <th>Cost</th>
                      <th>Details</th>
                      <th>Cancel</th>
                    </tr>
                  </thead>
                   
               @foreach($booking as $b)
                      
                  <tbody>      
                      <tr>
                      <td>{{$b->eventtitle}}</td>
                      <td>{{$b->agencyname}}</td>
                      <td>{{$b->date}}</td>
                      <td>{{$b->booking_count}}</td>
                      <td>{{$b->cost}}</td> 
                      <td>
                        <a href="{{route('events.event_details',$b->eventid)}}"> <button class="btn btn-dark" type="submit" >Details</button></a>
                      </td> 
                      <td>
                        <a href="{{route('event.eventCancel',[$b->id,$b->eventid])}}"> <button class="btn btn-primary" type="submit" >Cancel</button></a>
                      </td>
                        
                    </tr>
                      
                  </tbody>
                @endforeach
                </table>
@endsection

@section('title')
Book Events
@endsection