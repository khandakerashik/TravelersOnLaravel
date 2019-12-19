<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agencies | Admin Panel</title>
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
</head>
<body class="app sidebar-mini">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    @include('admin.header');
    @include('admin.sidenav');
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Agency List</h1></br> <input type="search" id="search" placeholder="Search Name,Email,Phone" >
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
                      <th>Name</th>
                      <th>Agency Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Profile Picture</th>
                    </tr>
                  </thead>
                  @foreach($agencies as $a)
                  <tbody>
                
                    <tr>
                      <td>{{$a->name}}</td>
                      <td>{{$a->agency_name}}</td>
                      <td>{{$a->email}}</td>
                      <td>{{$a->phone}}</td>
                      <td>{{$a->gender}}</td>
                      <td><img src="/images/{{$a->profile_pic}}" height="65px" width="100px"></td>

                      <td>
                        <a href="/admin/freaks/ban/<%= data[i].id %>">Ban</a>
                      </td>
                      <td>
                            <a href="/admin/freaks/delete/<%= data[i].id %>"> Delete</a>
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

    <script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        console.log($value);
       $.ajax({
        type : 'get',
        url : '{{URL::to('search/agencies')}}',
        data:{'search':$value},
        success:function(data){
        $('tbody').html(data);
        }
        });
        })
        </script>
        <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>



  </body>
</html>