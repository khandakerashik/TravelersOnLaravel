@extends('freaks.layout')
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
                  <img src="/{{session('freak')[0]['profile_pic']}}" alt="User Image" height="150px" width="150px" style=" border-radius: 50%;">
                </div>
                <div class="form-label-group my-4">
                 <strong> <p name="inputName">Name: {{ session('freak')[0]['name'] }} </p> </strong>
                </div>

                <div class="form-label-group my-4">
                <strong> <p name="inputName">Email Address: {{ session('freak')[0]['email'] }}  </p> </strong> 
                </div>

                <div class="form-label-group my-4">
                 <strong> <p name="inputName">Phone No: {{ session('freak')[0]['phone'] }} </p></strong>
                </div>

                <div class="form-label-group my-4">
                  <strong><p name="inputName">Gender: {{ session('freak')[0]['gender'] }} </p></strong>
                </div>
            </div>
          </div>
        </div>    
    </main>
    @endsection

@section('title')
Profile
@endsection