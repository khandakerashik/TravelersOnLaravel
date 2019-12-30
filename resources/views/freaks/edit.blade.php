@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Blog</h1>
        </div>
      </div>

      @foreach($blog as $b)
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-label-group my-4">
                  
                    
                    <input type="text" id="inputTittle" name="inputTittle" class="form-control" placeholder="Name" value="{{$b->title}}" required>
                  <label for="inputTittle">Tittle</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="inputLocation" name="inputLocation" value="{{$b->location}}" class="form-control" placeholder="inputLocation" required>
                  <label for="inputLocation">Location</label>
                </div>


                <div class="form-label-group my-4">
                  <textarea class="form-control1" id="description" name="description" placeholder="Description" required>{{$b->description}}</textarea>
                  <label for="description"></label>
                </div>

                <div class="form-label-group my-4">
                  <input id="inputImage" name="inputImage" value="<%=blog.image%>" class="form-control" type="file">
                </div>

                <button class="btn btn-lg btn-block my-4" type="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </main>
@endsection

@section('title')
Edit Blog
@endsection