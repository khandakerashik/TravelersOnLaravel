<!DOCTYPE html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/abc/js/modernizer.js"></script>
</head>
<body>

    @if(Session::has('loginuser')) 
    @include('common.user_header')
    @elseif(Session::has('admin')) 
    @include('common.adminheader')
    @else
    @include('common.header')
    @endif

    <div id="wrapper">
        <div class="section">
            <div class="container">
                <div class="row intro wow fadeIn">
                    <div class="col-md-12 text-center my-3">
                        <h1><strong>Events</strong></h1>
                        <p>{{$count}}</p>
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




                    
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/hoverdir.js"></script>  
</body>
</html>