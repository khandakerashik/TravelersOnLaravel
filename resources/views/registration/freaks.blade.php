<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" href="/abc/css/bootstrap.min.css">
	<script src="/abc/js/bootstrap.bundle.min.js"></script>
	<script src="/abc/js/jquery.slim.min.js"></script>
	<link rel="stylesheet" href="/abc/css/registration.css">
</head>
<body>
   
  <div class="container-fluid">
    <div class="row">

    	<div class="label col-12 text-center">
	      		 <a href="/home"><img class="label-image my-3" src="/abc/images/logo.png" height="160" width="160"></a>
	    	</div>
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-4">
          <div class="card-body">
            <h5 class="card-title text-center">Register as a Freak</h5>
            <form class="form-signin" method="post" >
              <div class="form-label-group my-4">
               
                <input type="text" id="inputName" name="inputName" value="<%=user.name %>" class="form-control" placeholder="Name"   required>
                <label for="inputName">Name</label>
                <span name="namespan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="email" id="inputEmail" name="inputEmail" value="<%=user.email %>"  class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
                <span name="emailspan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="text" id="inputPhone" name="inputPhone" value="<%=user.phone %>"  class="form-control" placeholder="Phone No" required>
                <label for="inputPhone">Phone No</label>
                <span name="phonespan"></span>
              </div>

              <div class="form-label-group my-4">
              	<div class="form-group">
      			      <select class="form-control" id="inputGender" name="inputGender" value="<%=user.gender %>" required>
      			      	<option>Select your Gender</option>
      			        <option value="male">Male</option>
      			        <option value="female">Female</option>
      			      </select>
      			  	</div>
      			  	<span name="genderspan"></span>
              </div>

              <div class="form-label-group my-4">
                <input type="password" id="inputPassword" name="inputPassword"  value="<%=user.password %>" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
                <span name="passwordspan"></span>
              </div>
              
              <div class="form-label-group my-4">
                <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" value="<%=user.conPassword %>"  class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
                <span name="confirmpasswordspan"></span>
              </div>
                
             
                
            <div class="text-center">
                    <% if(typeof errors != "undefined"){ %>   
                <button type="button" class="error-button"><strong>
                    <% errors.forEach(function(err){ %>
                        <%= err.msg %><br>
                    <% }); %>
                </strong></button><% } %>
                
                
                

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