<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" href=" /css/bootstrap.min.css">
	<script src=" /js/bootstrap.bundle.min.js"></script>
	<script src=" /js/jquery.slim.min.js"></script>
	<link rel="stylesheet" href=" /css/registration.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row">

    	<div class="label col-12 text-center">
	      		 <a href="/home"><img class="label-image my-3" src=" /images/logo.png" height="160" width="160"></a>
	    	</div>

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-4">
          <div class="card-body">
            <h5 class="card-title text-center">Register as a Agency</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group my-4">
                <input type="text" id="name" name="name" value=""  class="form-control" placeholder="Name" required>
                <label for="name">Name</label>
                <span name="namespan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="email" id="email" name="email" value=""  class="form-control" placeholder="Email address" required>
                <label for="email">Email address</label>
                <span name="emailspan"></span>
              </div>

               <div class="form-label-group my-4">
                <input type="text" id="agencyname" name="agencyname" value="" class="form-control" placeholder="Agency Name" required>
                <label for="agencyname">Agency name</label>
                <span name="agencynamespan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="text" id="phone" name="phone" value=""  class="form-control" placeholder="Phone No" required>
                <label for="phone">Phone No</label>
                <span name="phonespan"></span>
              </div>

              <div class="form-label-group my-4">
              	<div class="form-group">
			      <select class="form-control" id="gender" name="gender" value="" required>
			      	<option>Select your Gender</option>
			        <option value="male">Male</option>
			        <option value="female">Female</option>
			      </select>
			  	</div>
			  	<span name="genderspan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="password" id="password" name="password" value=""class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
                <span name="passwordspan"></span>
              </div>
              
              <div class="form-label-group my-4">
                <input type="password" id="confirmpassword" name="confirmpassword" value="" class="form-control" placeholder="Confirm Password" required>
                <label for="confirmpassword">Confirm password</label>
                <span name="confirmpasswordspan"></span>
              </div>
                
                
                
               
            
            <div class="text-center">
                    
                    @foreach($errors->all() as $err)
                      {{$err}} <br>
                    @endforeach
                

              <button class="btn btn-lg btn-block my-4" type="submit">Register</button>

              <div class="form-label-group text-center my-4">
	              <a href="/login">Login</a>
	          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>