<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/registration.css">
		<script src="/js/bootstrap.bundle.min.js"></script>
		<script src="/js/jquery.slim.min.js"></script>
	</head>
	<body>
		<div class="label col-12 text-center">
		   <a href="{{ route('home.index') }}"><img class="label-image my-3" src="/images/logo.png" height="160" width="160"></a>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="table-data1 text-center col-sm-9 col-md-6 col-lg-6">
					<div class="data1">
						<a class="label-anchor text-white my-5" href="{{ route('registration.freaks') }}"><img class="label-image my-4" src="/images/freaks.png" height="150" width="150"> </br> Register as Freaks</a>
					</div>
					<p class="paragraph justify-content-center text-white my-5">Freaks is normal user who can write blogs, book events, give rating to agencies, comment yo other blog, </p>
				</div>

				<div class="table-data2 text-center col-sm-9 col-md-6 col-lg-6">
					<div class="data2">
						<a class="label-anchor text-white my-5" href="{{ route('registration.agencies') }}"><img class="label-image my-4" src="/images/agencies.png" height="150" width="150"> </br> Register as Agencies</a>
					</div>
					<p class="paragraph justify-content-center text-white my-5">Travel Agency is special user who can offer tour packages, see other agencies tour packages.</p>
				</div>

			</div>
		</div>
	</body>
</html>