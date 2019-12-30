@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Offer Events</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post" enctype="multipart/form-data">
               {{csrf_field()}}

            @foreach($events as $e)
                <div class="form-label-group my-4">
                  <input type="text" id="tittle" name="tittle" class="form-control" placeholder="Tittle" required value="{{$e->title }}">
                  <label for="tittle">Tittle</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="agencyname" name="agencyname" class="form-control" placeholder="Agency Name" required value="{{$e->agencyname }}">
                  <label for="agencyname">Agency Name</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="place" name="place" class="form-control" placeholder="Place" required value="{{$e->place }}">
                  <label for="place">Place</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="date" id="date" name="date" min="today" class="form-control" placeholder="Date" required value="{{$e->date }}">
                  <label for="date">Date</label>
                 </div>

                <div class="form-label-group my-4">
                  <input type="text" id="duration" name="duration" class="form-control" placeholder="Duration" required value="{{$e->duration }}">
                  <label for="duration">Duration</label>
                </div>

                <div class="form-label-group my-4">
                  <textarea class="form-control" id="description" name="description" placeholder="Description" rows="10" required>{{$e->description }}</textarea>
                  <label for="description"></label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="person" name="person" class="form-control" placeholder="Person Capacity" required value="{{$e->person_capacity }}">
                  <label for="person">Person Capacity</label>
                </div>
                
                <div class="form-label-group my-4">
                  <input type="text" id="cost" name="cost" class="form-control" placeholder="Cost Per Person" required value="{{$e->cost_per_person }}">
                  <label for="cost">Cost Per Person</label>
                </div>

                <div class="form-label-group my-4">
                  <input id="image" name="image" class="form-control" type="file">
                  <label for="image">/{{$e->image }}</label>
                </div>

             @endforeach

                <button class="btn btn-lg btn-block my-4" type="submit">Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Edit
@endsection