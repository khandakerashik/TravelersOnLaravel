@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Profile</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
                <div class="form-label-group my-4 text-center">
                  <img src="/{{ session('travel_agencies')[0]['profile_pic'] }}" alt="User Image" height="150px" width="150px" style=" border-radius: 50%;">
                </div>

          @foreach($agency as $a)
                <div class="form-label-group my-4">
                  <p name="inputName"><b>Name:</b>&nbsp {{$a->name}}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputAgency"><b>Agency Name:</b>&nbsp {{$a->agency_name}}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName"><b>Email Address:</b>&nbsp {{$a->email}}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName"><b>Phone No:</b>&nbsp {{$a->phone}}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName"><b>Gender:</b>&nbsp {{$a->gender}}</p>
                </div>
          @endforeach
          
            </div>
          </div>
        </div>
    </main>

@endsection

@section('title')
Profile
@endsection