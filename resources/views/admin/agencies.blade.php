<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agencies | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href=" /css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <script src="{{asset('js/jquery-1.8.2.min.js')}}" type="text/javascript" ></script>
  
    
   
</head>
<body class="app sidebar-mini">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    {{csrf_field()}}
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
                <table class="table table-hover table-bordered tablesorter" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Agency Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Profile Picture</th>
                      <th></th>
                      <th></th>
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
                      <td><img src="/{{$a->profile_pic}}" height="65px" width="100px"></td>

                      <td>
                        <a href="{{route('admin.banagencies', $a->email)}}">Ban</a>
                      </td>
                      <td>
                            <a href="{{route('admin.deleteagencies', $a->email)}}"> Delete</a>
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
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript">
 $(document).ready( function () {
     $('#sampleTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

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
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>



  </body>
</html>