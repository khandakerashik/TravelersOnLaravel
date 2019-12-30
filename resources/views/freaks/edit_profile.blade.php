@extends('freaks.layout')
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

                @csrf

                <div class="form-label-group my-4">
                  <input type="text" id="inputName" name="inputName" value="{{session('freak')[0]['name']}}" class="form-control" placeholder="Name" required>
                  <label for="inputName">Name</label>
                </div>
                  

                <div class="form-label-group my-4">
                  <input type="text" id="inputPhone" name="inputPhone" value="{{session('freak')[0]['phone']}}" class="form-control" placeholder="Phone No" required>
                  <label for="inputPhone">Phone No</label>
                </div>

                

                <div class="form-label-group my-4">
                  <input type="password" id="inputPassword" name="inputPassword" value="{{session('freak')[0]['password']}}" class="form-control" placeholder="New Password" required>
                  <label for="inputPassword">New Password</label>
                </div>
                
    

                <div class="form-label-group my-4">
                  <input id="inputImage" name="inputImage" class="form-control" type="file">
                </div>


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