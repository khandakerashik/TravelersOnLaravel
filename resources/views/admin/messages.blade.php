<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Messages | Admin Panel</title>
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
          <h1>Messages</h1>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                          <th> </th>
                          <th> </th>
                          <th> <a href="{{route('admin.sendmessage')}}"> <button class="btn btn-lg btn-block" type="submit">Send Message</button></a> </th>
                        </tr>
                      </thead>
                    <thead>
                    <tr>
                      <th>Email</th>
                      <th>Message</th>
                      <th></th>
                    </tr>
                  </thead>
                  @foreach($messages as $m)
                  <tbody>
                    <tr>
                      <td>{{$m->sender}}</td>
                      <td>{{$m->message}}</td>
                      <td>
                        <a href="{{route('admin.messagereplyview', $m->id)}}">Reply</a>
                      </td>
                      <td>
                          <a href="{{route('admin.markreadmessage', $m->id)}}">Mark As Read</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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