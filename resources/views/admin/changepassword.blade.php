<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Change Password | Admin Panel</title>
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
          <h1>Change Password</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
                {{csrf_field()}}
                <div class="form-label-group my-4">
                  <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password"  >
                  <label for="inputPassword">Password</label>
                </div>
                
                <div class="form-label-group my-4">
                  <input type="password" id="inputConfirmPassword" name="ConfirmPassword" class="form-control" placeholder="Password" >
                  <label for="inputConfirmPassword">Confirm password</label>
                </div>
                <button class="btn btn-lg btn-block my-4" type="submit">Change Password!</button>
				@foreach($errors->all() as $err)
                {{$err}} <br>
                  @endforeach	
              </form>
            </div>
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