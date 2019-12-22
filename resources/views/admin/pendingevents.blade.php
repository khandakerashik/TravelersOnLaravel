<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pending Events | Admin Panel</title>
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
          <h1>Pending Events</h1>
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
                      <th>Tittle</th>
                      <th>Agency Name</th>
                      <th>Details</th>
                      <th>Capacity</th>
                      <th>Price Per  Person</th>
                    </tr>
                  </thead>
                  @foreach($events as $e)
                    <tbody>
                      <tr>
                        <td>{{$e->title}}</td>
                        <td>{{$e->agencyname}}</td>
                        <td>{{$e->description}}</td>
                        <td>{{$e->person_capacity}}</td>
                        <td>{{$e->cost_per_person}}</td>
                        <td>
                          <a href="{{route('admin.approveevent',$e->id)}}"> Approve </a>

                        </td>
                        <td>
                              <a href="{{route('admin.deleteevent',$e->id)}}"> Delete </a>

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