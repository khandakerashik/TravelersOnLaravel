<!DOCTYPE html>
<html lang="en">
    <title>Event Details</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/event.css">
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
                                <div class="post-media wow fadeIn">
                                    <img src=" {{$e->image }}" alt="" class="img-responsive">
                                </div>

                                <div class="blog-desc">
                                    <h3 class="post-title"></h3>
                                    <p class="lead">Travel Agency: {{$e->agencyname }} </p>
                                    <p class="lead">Date: {{$e->date }} </p>
                                    <p class="lead">Place: {{$e->place }} </p>
                                    <p class="lead">Person Capacity:  {{$e->person_capacity }} </p>
                                    <p class="lead">Cost per person:  {{$e->cost_per_person }} </p>

                                    <p class="drop-cap"> 
                                         {{$e->description }}
                                </div>
                                @if(Session::has('user')) 
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('events.book_now',$e->id) }}"><input type="submit" value="Book Now" class="btn btn-primary" /></a>
                                </div>
                            </div>
                        </div>


                        <div class="row p-4">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                <div class="portfolio-share">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="far fa-save"></i></i>Report To Admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.js"></script>
</body>
</html>