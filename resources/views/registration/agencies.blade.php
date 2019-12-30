<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/registration.css">
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/jquery.slim.min.js"></script>
</head>
<body>

  <div class="container-fluid">
    <div class="row">

    	<div class="label col-12 text-center">
	      <a href="{{ route('home.index') }}"><img class="label-image my-3" src="/images/logo.png" height="160" width="160"></a>
	    </div>

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-4">
          <div class="card-body">
            <h5 class="card-title text-center">Register as a Agency</h5>
            <form class="form-signin" method="post">
              @csrf

              <div class="form-label-group my-4">
                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter your name"   required>
                <label for="name">Enter your name</label>
                <span name="namespan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter your Email address" required>
                <label for="email">Enter your Email address</label>
                <span name="emailspan"></span>
              </div>

               <div class="form-label-group my-4">
                <input type="text" id="agencyname" name="agencyname" value="{{old('agencyname')}}" class="form-control" placeholder="Enter your Agency Name" required>
                <label for="agencyname">Enter your Agency Name</label>
                <span name="agencynamespan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="text" id="phone" name="phone" value="{{old('phone')}}"  class="form-control" placeholder="Enter your Phone No" required>
                <label for="phone">Enter your Phone No</label>
                <span name="phonespan"></span>
              </div>

              <div class="form-label-group my-4">
              	<div class="form-group">
      			      <select class="form-control" id="gender" value="{{old('gender')}}" name="gender" required>
      			      	<option>Select your Gender</option>
      			        <option value="male">Male</option>value="{{old('email')}}"
      			        <option value="female">Female</option>
      			      </select>
      			  	</div>
      			  	<span name="genderspan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter your Password" required>
                <label for="password">Enter your Password</label>
                <span name="passwordspan"></span>
              </div>
              
              <div class="form-label-group my-4">
                <input type="password" id="confirmpassword" value="{{old('confirmpassword')}}" name="confirmpassword" class="form-control" placeholder="Enter your Password" required>
                <label for="confirmpassword">Enter your Confirm password</label>
                <span name="confirmpasswordspan"></span>
              </div>    

              <button class="btn btn-lg btn-block my-4" type="submit">Register</button>

              <div class="form-label-group text-center my-4">
	              <a href="{{ route('login.index') }}">Login</a>
	          </div>
            </form>

                  @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>