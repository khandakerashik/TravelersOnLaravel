@extends('freaks.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Trash</h1>
        </div>
      </div>

    
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                  
                <table class="table table-hover" id="sampleTable">
             
                  <thead class="thead-dark"> 
                   
                    <tr>
                      <th>Tittle</th>
                      <th>Location</th>
                      <th>Post Date</th>
                      <th>Image</th>
                      <th>Restore Blog</th>
                    </tr>
                  </thead>
                   
               @foreach($blog as $b)
                      
                  <tbody>    
                    
                      
                       
                      <tr>
                     
                      <td>{{$b->title}}</td>
                      <td>{{$b->location}}</td>
                      <td>{{$b->date}}</td>
                      <td><img  src="\{{$b->image}}" height="65px" width="100px"></td>
                      
                          
                      <td>
                        <a href="{{route('freaks.restore',$b->id)}}"> <button class="btn btn-lg btn-success" type="submit" >Restore</button></a>
                      </td>
                        
                    </tr>
                      
                  </tbody>
                @endforeach
                </table>

      

@endsection

@section('title')
Trash
@endsection