<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="{{ asset ('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>

<body>
<!-- https://getbootstrap.com/docs/4.3/layout/grid/ -->
<div class="container">
  <div class="row justify-content-md-center">
		<div class="col-md-auto">
			<header class="home-container">	
				<h1 ><b>Vind</b></h1>
				<h6>Expand your Job as models | Recruit Top Models for Help your Careers.</h6>		
			</header>
		</div>
	</div>
</div>
	
@yield('content')
<!-- https://mdbootstrap.com/docs/jquery/navigation/footer/ -->
</body>
</html>