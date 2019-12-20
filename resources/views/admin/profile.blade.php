<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
  
  @include('admin.header');
	@include('admin.sidenav');
  
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
                @foreach($admin as $a)
                  <img src="/images/{{$a->profile_pic}}" alt="User Image" height="150px" width="150px" style=" border-radius: 50%;">
                </div>
                <div class="form-label-group my-4">
                
                  <p name="inputName">Name:  {{$a->name}} </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Email Address:{{$a->email}} </p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Phone No: {{$a->phone}}</p>
                </div>

                <div class="form-label-group my-4">
                  <p name="inputName">Gender: {{$a->gender}}</p>
                </div>
                <a href="{{route('admin.changepassword', $a->email)}}">Want to change your password?</a>
                @endforeach
            </div>
           
          </div>
        </div>

      
    </main>
    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>
  </body>
</html>