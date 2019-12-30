@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Booked Events</h1>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Event Tittle</th>
                      <th>Agency name</th>
                      <th>Booked By</th>
                      <th>Booked By(Name)</th>
                      <th>Date</th>  
                    </tr>
                  </thead>
                  
              @foreach($booking as $b)
                  <tbody>
                    <tr>
                      <td>{{$b->eventtitle }}</td>
                      <td>{{$b->agencyname }}</td>
                      <td>{{$b->bookedby }}</td>
                      <td>{{$b->bookedby_name }}</td>
                      <td>{{$b->date }}</td>
                    </tr>
                  </tbody>
                  
              @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Booked Events
@endsection