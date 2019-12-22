
<!DOCTYPE HTML>
<html>
<head>
<title>Home | Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href=" /css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href=" /css/admin.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src=" /js/jquery-2.1.1.min.js"></script> 
<script src=" /js/bars.js"></script>
<!--icons-css-->
<link href=" /css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href=" /css/travel_agency.css">
<link rel="stylesheet" type="text/css" href=" /css/registration.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src=" /js/bootstrap.js"> </script>
<!-- mother grid end here-->
<!--static chart-->
<script src=" /js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->

<!--geo chart-->

<!--skycons-icons-->
<script src=" /js/skycons.js"></script>


<!--//skycons-icons-->
</head>
<body class="app sidebar-mini">	
	{{csrf_field()}}
	@include('admin.header');
	@include('admin.sidenav');
	
		<main class="app-content">

				<div class="app-title">
				  <div>
					<h1>Dashboard</h1>
				  </div>
				</div>



<div class="page-container">	
   <div class="left-content col-md-12">
	   <div class="mother-grid-inner">
            <!--header start here-->
			
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						
						<h3>{{$users}}</h3> 
				
						<h4>Registered User(s)</h4>
						<p></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>{{$messages}}</h3>
						<h4>Message(s)</h4>
						<p>A messeging service developed by Traveler'S.</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>

<!--main page chart layer2-->
	<div class="chart-layer-1">
		
		<div class="col-md-6 chart-layer2-right">
				<div class="prograc-blocks">
				<!--Progress bars-->
				<div class="home-progres-main">
				<h3>Users</h3>
				</div>
				<div class='bar_group'>
						<div class='bar_group__bar thin' label='Freaks' show_values='true' tooltip='true' value='{{$freaks}}'></div>
						<div class='bar_group__bar thin' label='Agencies' show_values='true' tooltip='true' value='{{$agencies}}'></div>
				</div>
			<!--//Progress bars-->
			</div>
		</div>
		<div class="clearfix"> </div>

		

	</div>
	<div class="chart-layer-1">
		
			<div class="col-md-6 chart-layer2-left">
					<div class="prograc-blocks">
					<!--Progress bars-->
					<div class="home-progres-main">
					<h3>Published</h3>
					</div>
					<div class='bar_group'>
							<div class='bar_group__bar thin' label='Blogs' show_values='true' tooltip='true' value='{{$blogs}}'></div>
							<div class='bar_group__bar thin' label='Events' show_values='true' tooltip='true' value='{{$events}}'></div>
					</div>
						<script src=" /js/bars.js"></script>
	
				<!--//Progress bars-->
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-6 chart-blo-1">
					<div class="chart-other">
						<h3>Users</h3> 		
						<canvas id="userspie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
										Freaks = Blue <br/> Agencies = Orange
										
										<script>
											var pieData = [
												{
													value: '{{$agencies}}',
													color:"#337AB7"
												},
												{
													value : '{{$freaks}}',
													color : "#FC8213"
												},
											
											];
											new Chart(document.getElementById("userspie").getContext("2d")).Pie(pieData);
										</script>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="col-md-6 chart-blo-2">
						<div class="chart-other">
							<h3>Published</h3> 		
							<canvas id="publishedpie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
							Events = Orange <br/> Blogs = Blue
											
											<script>
												var pieData = [
													{
														value: '{{$events}}',
														color:"#337AB7"
													},
													{
														value : '{{$blogs}}',
														color : "#FC8213"
													},
												
												];
												new Chart(document.getElementById("publishedpie").getContext("2d")).Pie(pieData);
											</script>
						</div>
					</div>
					<div class="clearfix"> </div>
				
	
			
	
		</div>

	
			
		
</div>



<!--inner block end here-->
<!--copy rights start here-->

</div>
</div>
</div>
</main>
<!--slider menu-->
@include('admin.sidenav');
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
	<script src=" /js/jquery.nicescroll.js"></script>
    <script src=" /js/scripts.js"></script>
    <script src=" /js/jquery-3.3.1.min.js"></script>
    <script src=" /js/popper.min.js"></script>
    <script src=" /js/bootstrap.min.js"></script>
    <script src=" /js/main.js"></script>
		<!--//scrolling js-->
	<script src=" /js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     