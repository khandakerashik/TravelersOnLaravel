<!DOCTYPE html>
<html lang="en">
    <title>Book</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/event.css">
    <link rel="stylesheet" href="/css/registration.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="/js/modernizer.js"></script>
</head>
</head>
<body>

    @if(Session::has('user')) 
    @include('common.user_header')
    @else
    @include('common.header')
    @endif
     
    <div id="wrapper">
        <div class="section">
            <div class="container">
                <div class="row m45">

            @foreach($event as $e)

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="blog-single">
                                <form method="post"  >
                                    @csrf
                                    <div class="post-media wow fadeIn">
                                        <img src="{{$e->image}}" alt="" class="img-responsive">
                                    </div>

                                    <div class="blog-desc">
                                        <h3 class="post-title"> {{$e->title}}</h3>
                                        <p class="lead">Travel Agency: {{$e->agencyname}}</p>
                                        <p class="lead">Date: {{$e->date}} </p>
                                        <p class="lead">Place: {{$e->place}} </p>
                                        <p class="lead">Available Person Capacity: {{$e->person_capacity}} </p>
                                        <p class="lead">Cost per person: {{$e->cost_per_person}} </p>

                                        <div class="form-label-group my-4">
                                            <input type="text" id="inputPerson" name="inputPerson" class="form-control" placeholder="How many person want to book?" required></p>
                                            <label for="inputPerson">Booking for person: (How many person want to book?)</label>
                                        </div>

                                        <div class="form-label-group my-4">
                                            <input type="password" id="pin" name="pin" class="form-control" placeholder="Enter Secret pin:" required></p>
                                            <label for="pin">Enter Secret pin:</label>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <input type="submit" value="Book Now" class="btn btn-primary" />
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.js"></script>
</body>
</html>