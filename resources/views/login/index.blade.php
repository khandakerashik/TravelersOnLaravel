<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/login.css">
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/jquery.slim.min.js"></script>
</head>
	<body>
	  <div class="container-fluid">
	    <div class="row">

	    <div class="label col-12 text-center">
	      <a href="{{route('home.index')}}"><img class="label-image my-3" src="/images/logo.png" height="160" width="160"></a>
	    </div>

	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-4">
	          <div class="card-body my-2">
	            <h5 class="card-title text-center text-black">Login</h5>
	            <form class="form-signin" method="post">
	            	
	            	@csrf

	              <div class="form-label-group my-4">
	                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
	                <label for="email">Email address</label>
	                <span name="emailspan"></span>
	              </div>

	              <div class="form-label-group my-4">
	                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
	                <label for="password">Password</label>
	                <span name="passwordspan"></span>
	              </div>

	              <button class="btn btn-lg btn-block my-4" type="submit">Login</button>

	              <div class="form-label-group text-center my-4">
	                 <p>Don't have an account? <a href="{{ route('registration.index') }}">Create Account</a></p>
	              </div>
	            </form>

	             @if (Session::has('msg'))
              <div class="alert alert-danger">
                  <ul>
                     <li>{{ session('msg')  }}</li>
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