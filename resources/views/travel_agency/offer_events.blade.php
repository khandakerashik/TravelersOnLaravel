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
              <form class="form-signin" method="post" enctype= "multipart/form-data">
                {{csrf_field()}}

         

                <div class="form-label-group my-4">
                  <input type="text" id="tittle" name="tittle" class="form-control" placeholder="Tittle" required>
                  <label for="tittle">Tittle</label>
                </div>

                <div class="form-label-group my-4">
                @foreach($agency as $a)
                  <input type="text" id="agencyname" name="agencyname" class="form-control" placeholder="Agency Name" required value="{{$a->agency_name}}" >
                @endforeach
                  <label for="agencyname">Agency Name</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="place" name="place" class="form-control" placeholder="Place" required>
                  <label for="place">Place</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="date" id="date" name="date" min="today" class="form-control" placeholder="Email address" required>
                  <label for="date">Date</label>
                 </div>

                <div class="form-label-group my-4">
                  <input type="text" id="duration" name="duration" class="form-control" placeholder="Duration" required>
                  <label for="duration">Duration</label>
                </div>

                <div class="form-label-group my-4">
                  <textarea class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                  <label for="description"></label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="person" name="person" class="form-control" placeholder="Person Capacity" required>
                  <label for="person">Person Capacity</label>
                </div>
                
                <div class="form-label-group my-4">
                  <input type="text" id="cost" name="cost" class="form-control" placeholder="Cost Per Person" required>
                  <label for="cost">Cost Per Person</label>
                </div>

                <div class="form-label-group my-4">
                  <input id="image" name="image" class="form-control" type="file" style="height: 65px, width=100px">
                </div>
              
                <button class="btn btn-lg btn-block my-4" type="submit">Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Offer Event
@endsection