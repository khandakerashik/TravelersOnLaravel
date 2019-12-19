<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Profile | Admin Panel</title>
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
          <h1>Edit Profile</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
                <div class="form-label-group my-4">
                  <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Name" required value="<%= data.name %>">
                  <label for="inputName">Name</label>
                </div>
                <div class="form-label-group my-4">
                  <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone No" required value="<%= data.phone %>">
                  <label for="inputPhone">Phone No</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required value="<%= data.password %>" >
                  <label for="inputPassword">Password</label>
                </div>
                
                <div class="form-label-group my-4">
                  <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" class="form-control" placeholder="Password" required value="<%= data.password %>">
                  <label for="inputConfirmPassword">Confirm password</label>
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
    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>
  </body>
</html>