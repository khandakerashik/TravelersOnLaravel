@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Edit Events</h1>
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
                      <td>{{$e->title}}</td>
                      <td>{{$e->agencyname}}</td>
                      <td>{{$e->place}}</td>
                      <td>{{$e->date}}</td>
                      <td>{{$e->duration}}</td>
                      <td>{{$e->description}}</td>
                      <td>{{$e->person_capacity}}</td>
                      <td>{{$e->cost_per_person}}</td>
                      <td><img src="/{{$e->image}}" height="65px" width="100px"></td>
                      <td>
                        <a href="{{route('travel_agency.edit', $e->id)}}"> <button class="btn btn-primary btn-lg btn-block" type="submit">Edit</button></a>
                      </td>
                    </tr>
                  </tbody>

              @endforeach

                    </div>   
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



    </main>
@endsection

@section('title')
Edit Events
@endsection