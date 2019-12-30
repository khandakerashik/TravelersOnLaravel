<!DOCTYPE html>
<head>
    <title>Blog</title>
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
                        <h1><strong>Blog</strong></h1>
                        <p>{{$count}}</p>
                    </div>
                </div>

                <div id="da-thumbs" class="row da-thumbs portfolio wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">


                    
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
    </div>

    <script src="/js/all.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/hoverdir.js"></script>  
</body>
</html>