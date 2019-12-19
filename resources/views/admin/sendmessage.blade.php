<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Message | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
  <form method="POST">
  
  @include('admin.header');
	@include('admin.sidenav');
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Message </h1>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
               Sender:&nbsp;&nbsp;&nbsp;admin@travelers.com </br></br>
               Reciever:&nbsp;&nbsp;&nbsp;<input type="text" name="reciever"> </br></br>
               Message:&nbsp;&nbsp;&nbsp; <input type="text" name="message">&nbsp;&nbsp;&nbsp;
               <input type="submit" name="submit" value="Send!" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </form>
    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>
  </body>
</html>