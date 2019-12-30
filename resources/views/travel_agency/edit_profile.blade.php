@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Edit Profile</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

               @foreach($agency as $a)
                  <div class="form-label-group my-4">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required value="{{$a->name}}">
                    <label for="name">Name</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" required value="{{$a->email}}" disabled>
                    <label for="email">Email</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="text" id="agencyname" name="agencyname" class="form-control" placeholder="Agency name" required value="{{$a->agency_name}}">
                    <label for="agencyname">Agency name</label>
                  </div>
    
                  <div class="form-label-group my-4">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone No" required value="{{$a->phone}}">
                    <label for="phone">Phone No</label>
                  </div>

                  <div class="form-label-group my-4">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required value="{{$a->password}}">
                    <label for="password">Password</label>
                  </div>
    
                  <div class="form-label-group my-4">
                    <input id="image" name="image" value="" class="form-control" type="file">
                    <label for="image">/{{ session('travel_agencies')[0]['profile_pic'] }}</label>
                  </div>
              @endforeach
                <button class="btn btn-lg btn-block my-4" type="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>


@endsection

@section('title')
Edit Profile
@endsection