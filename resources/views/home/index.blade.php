<!DOCTYPE html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="/js/modernizer.js"></script>
    </head>
    <body>

    


    @if(Session::has('loginuser')) 
    @include('common.user_header')
    @elseif(Session::has('admin')) 
    @include('common.adminheader')
    @else
    @include('common.header')
    @endif
     
   
   
   
        <div class="container h-50">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                  <input class="search_input" type="text" name="" placeholder="Search here...">
                  <a href="" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>


        <div id="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="travel-filter wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <ul>
                                <li><a class="btn btn-dark active" href="" data-filter="*">All</a></li>
                                <li><a class="btn btn-dark" href="" data-toggle="tooltip" data-placement="top"  data-filter=".cat1">Blog</a></li>
                                <li><a class="btn btn-dark" href="" data-toggle="tooltip" data-placement="top" data-filter=".cat2">Events</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div id="da-thumbs" class="row da-thumbs portfolio wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                   
                  @foreach($event as $e)
                    <div class="post-media pitem item-w1 item-h1 cat2">
                        <a href="{{route('events.event_details',$e->id)}}" title="">
                            <img src="{{$e->image}}" alt="" class="img-responsive">
                            <div>
                                <h3>{{$e->title}}<strong>{{$e->date}}</strong><small>{{$e->catagory}}</small></h3>
                            </div>
                        </a>
                    </div>
                @endforeach
                   
                    
                    @foreach($blog as $b)
                    <div class="post-media pitem item-w1 item-h1 cat1">
                        <a href="{{route('blogs.blog_details',$b->id)}}" title="">
                            <img src="{{$b->image}}" alt="" class="img-responsive">
                            <div>
                                <h3>{{$b->title}}<strong>{{$b->name}}</strong><small>{{$b->catagory}}</small></h3>
                            </div>
                        </a>
                    </div>
                @endforeach
                   
                </div>
            </div>
        </div>

        <script src="/js/all.js"></script>
        <script src="/js/home.js"></script>
        <script src="/js/hoverdir.js"></script>  
    </body>
</html>