<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Notification | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
  
  {{csrf_field()}}
  @include('admin.header');
	@include('admin.sidenav');
  
  
    <main class="app-content">

      <div class="app-title">
          
        <div>
          <h1>Notification</h1>
        </div>
          
      </div>

      
      @foreach($notifications as $n)
      <div class="alert alert-info">
        <strong><a href="/admin/pendingevents">{{$n->title}}</a> </strong>&nbsp event is offered by  {{$n->postby}} from {{$n->agencyname}}. Item is on pending list.
        </div>
      @endforeach


    </main>
    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>
  </body>
</html>