@extends('app')

@section('title', 'Category | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/category-en">English</a>&nbsp &nbsp;
	<a href="/category-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-en">Home</a>
		<a class="active" href="/category-en">Category</a>
		<a href="/about-en">About</a>
		<a href="/signin-en">Sign in</a>
		<a href="/signup-en">Sign up</a>
	</div>
	
	<div class="container"> 
		<div class="row">
			<div class="col-md-auto"><br>
				<h1 style="text-align:center; color:#8397b3">User Category</h1>
				<p style="text-align:center; color:brown">There are several user categories that can access Vind, such as model, photographer, makeup artist, and fashion designer.
				Those profession have some benefits that can described in the following.</p><br>
				<div class="well">
					<ul class="list-unstyled">
						<li class="media">
							<img src="{{ asset('images/home-pict.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="model">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Model</b></h5><br>
								<p align="justify">If you are a <b>model</b> then there are several benefits to be gained when using Vind.
								The first benefit is that registering as a Vind user will not cost you anything.
								And then, a search feature will appear on the homepage that will display events based on location if you have logged in.
								You can join the events and ask directly on the event organizer by chat feature.
								Besides, you can also accept job offers from photographers, makeup artists, and fashion designers.
								In order to get lots of job offers, you must display the results of your attractive portfolio photos on your own profile page.</p>
							</div>
						</li>
				</div>
				<div class="well">
						<li class="media my-4">
							<img src="{{ asset('images/home-pict2.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="photographer">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Photographer, Fashion Designer, Makeup Artist</b></h5><br>
								<p align="justify">If you are a <b>photographer, makeup artist, or fashion designer</b>, then there are several benefits to be gained when using Vind. 
								The first benefit is that registering as a Vind user will not cost you anything.
								Futhermore, you can search for the appropriate model easily, precisely, and quickly by using the search feature that will appear after logging in.
								The result from searches based on gender, height, and location are thumbnails of models and their names, you can also browse the profile pages of each models to see the biodata and portfolio. 
								You can also ask directly to the model about the job you want to offer through the chat feature.
								In order to be able to convince the model and get cooperation for a job, you must display the results of your attractive portfolio photos on your own profile page.
								And the most important benefit is you can upload your event and just waiting for the candidates.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><br><br>
	@endsection
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>