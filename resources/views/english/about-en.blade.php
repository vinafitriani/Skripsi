@extends('app')

@section('title', 'About | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/about-en">English</a>&nbsp &nbsp;
	<a href="/about-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

<div class="topnav">
	<a href="/index-en">Home</a>
	<a href="/category-en">Category</a>
	<a class="active" href="/about-en">About</a>
	<a href="/signin-en">Sign in</a>
	<a href="/signup-en">Sign up</a>
</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="{{ asset ('images/pict4.jpg')}}" class="img-thumbnail" alt="Placeholder image">
			</div>
			<div class="col-md-4"><br>
				<h2>About</h2>
				<p align="justify">Vind is job searching website for fashion models, and help photographers, fashion designers, and makeup artists in finding models that fit the desired categories suach as height, gender, and even location.
				You can search for categories in the searching feature that will appear after logging in.
				Besides, Vind will help display the results of photos on the user's profile page which will be taken into consideration when choosing the right candidate.
				Vind also can help to facilitate someone who has the following professions :</p>
				<ul>
					<li>Model</li>
					<li>Photographer</li>
					<li>Fashion Designer</li>
					<li>Makeup Artist</li>
				</ul>				
			</div>
		</div>
	</div>
@endsection					
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>