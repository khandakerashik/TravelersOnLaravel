@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Events</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
               {{csrf_field()}}

            @foreach($events as $e)

                <div class="form-label-group my-4">
                  <p name="tittle"><b>Tittle:</b> &nbsp {{$e->title }}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="agencyname"><b>Agency name:</b> &nbsp {{$e->agencyname }}</p>
                </div>

                <div class="form-label-group my-4">
                  <p for="palce"><b>Place:</b> &nbsp {{$e->place }}</p>
                </div>

                <div class="form-label-group my-4">
                  <p for="palce"><b>Date:</b> &nbsp {{$e->duration }}</p>
                </div>

                <div class="form-label-group my-4">
                  <p for="description"><b>Description:</b> &nbsp {{$e->description }}</p>
                </div>

                <div class="form-label-group my-4">
                  <p for="person"><b>Person Capacity:</b>&nbsp  {{$e->person_capacity }}</p>
                </div>
                
                <div class="form-label-group my-4">
                  <p for="cost"><b>Price Per Person:</b> &nbsp {{$e->cost_per_person }}</p>
                </div>
                <div class="form-label-group my-4">
                   <p for="image"><b>Image:</b> &nbsp <img src="/{{$e->image }}" height="65px" width="100px"></p>
                </div>

                <div class="form-label-group my-4">
                  <p for="delete">Are you want to delete it?</p>
                  <a href=""> <button class="btn btn-lg btn-block" type="submit">Confirm</button>
                </div>

          @endforeach


              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Delete
@endsection