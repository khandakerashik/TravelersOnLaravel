@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>History</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <p><b>Approved Event</b></p>
                  <thead>
                    <tr>
                      <th>Tittle</th>
                      <th>Agency name</th>
                      <th>Place</th>
                      <th>Date</th>
                      <th>Duration</th>
                      <th>Description</th>
                      <th>Person Capacity</th>
                      <th>Price Per Person</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  

              @foreach($events as $e)

                  <tbody>
                    <tr>
                      <td>{{$e->title }}</td>
                      <td>{{$e->agencyname }}</td>
                      <td>{{$e->place }}</td>
                      <td>{{$e->date }}</td>
                      <td>{{$e->duration }}</td>
                      <td>{{$e->description }}</td>
                      <td>{{$e->person_capacity }}</td>
                      <td>{{$e->cost_per_person }}</td>
                      <td><img src="/{{$e->image }}" height="65px" width="100px"></td>
                    </tr>
                  </tbody>

              @endforeach

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <p><b>Declined/Deleted Event</b></p>
                  <thead>
                    <tr>
                      <th>Tittle</th>
                      <th>Agency name</th>
                      <th>Place</th>
                      <th>Date</th>
                      <th>Duration</th>
                      <th>Description</th>
                      <th>Person Capacity</th>
                      <th>Price Per Person</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  
                  @foreach($event as $ev)

                  <tbody>
                    <tr>
                      <td>{{$ev->tittle }}</td>
                      <td>{{$ev->agencyname }}</td>
                      <td>{{$ev->place }}</td>
                      <td>{{$ev->date }}</td>
                      <td>{{$ev->duration }}</td>
                      <td>{{$ev->description }}</td>
                      <td>{{$ev->person_capacity }}</td>
                      <td>{{$ev->cost_per_person }}</td>
                      <td><img src="/{{$ev->image }}" height="65px" width="100px"></td>
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
History
@endsection