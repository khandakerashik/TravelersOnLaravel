@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Blog</h1>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                   <div class="panel-heading"> &nbsp <p class="text-center"><strong>Search Blogs</strong>  </p>  
                   </div>
                    <div class="panel-body">
                     <div class="form-group">
                      <input type="text" name="search" id="search" class="form-control" placeholder="Search" />
                     </div>
                <table class="table table-hover " id="sampleTable">
             
                  <thead class="thead-dark"> 
                   
                    <tr>
                      <th>Tittle</th>
                      <th>Location</th>
                      <th>Post Date</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete Blog</th>
                    </tr>
                  </thead>
                      
                  <tbody>    
                    
                      
                      
                  </tbody>
               
                </table>
                 
                  
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

      <script>
      $(document).ready(function(){

       fetch_customer_data();

       function fetch_customer_data(query = '')
       {
        $.ajax({
         url:"{{ route('freaks.action') }}",
         method:'GET',
         data:{query:query},
         dataType:'json',
         success:function(data)
         {
          $('tbody').html(data.table_data);
          $('#total_records').text(data.total_data);
         }
        })
       }

       $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_customer_data(query);
       });
      });

      </script>



@endsection

@section('title')
Edit Blog
@endsection