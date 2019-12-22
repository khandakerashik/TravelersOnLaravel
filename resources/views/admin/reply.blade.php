<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reply | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
{{csrf_field()}}
  <form method="POST">
  
  @include('admin.header');
	@include('admin.sidenav');
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Reply </h1>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                  <% for(var i=0; i < data.length; i++){ %>
               Reply From:&nbsp;&nbsp;&nbsp;admin@travelers.com </br></br>
               Reply to:&nbsp;&nbsp;&nbsp;<input type="text" name="reciever" value="<%= data[i].sender %>"> </br></br>
               Message:&nbsp;&nbsp;&nbsp; <input type="text" name="message">&nbsp;&nbsp;&nbsp;
               <input type="submit" name="submit" value="Send!" >

               <% } %>
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