<!DOCTYPE html>
<head>
    <link rel="stylesheet" href=" /css/bootstrap.min.css">
    <link rel="stylesheet" href=" /css/home.css">
    <script src=" /js/modernizer.js"></script>
</head>
<body> 
    {{csrf_field()}}
    @include('common.adminheader');
    <div id="wrapper">
        <div class="section">
            <div class="container">
                <div class="row intro wow fadeIn">
                    <div class="col-md-12 text-center my-3">
                        <h1><strong>Blog</strong></h1>
                        
                    </div>
                </div>
                
                <div id="da-thumbs" class="row da-thumbs portfolio wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                

                    
                
                    <div class="post-media pitem item-w1 item-h1 cat1">
                    @foreach($blog as $b)

                            <img src="/images/{{$b->image}}" alt="" class="img-responsive">
                            <div>
                                <h3>{{$b->title}} <strong>{{$b->name}}</strong><small>{{$b->postby}}</small></h3>
                            </div>
                        </a>
                    </div>
                    
                    

                     
                </div>    
            </div>
        </div>
    </div>@endforeach
    
    <script src=" /js/all.js"></script>
    <script src=" /js/home.js"></script>
    <script src=" /js/hoverdir.js"></script>  
    
</body>
</html>