@extends('app')

@section('title', 'Home | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/index-model-en">English</a>&nbsp &nbsp;
	<a href="/index-model-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a class="active" href="/index-en">Home</a>
		<a href="/inbox-en">Inbox</a>
		<a href="/profile-en">Profile</a>
		<a href="/category-en">Category</a>
		<a href="/about-en">About</a>
		<a href="/index-en">Sign out</a>
	</div>
	
	<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
  	<div class="container">
    	<h1 class="display-4">Become a Top Models</h1>
			<p class="lead">from using Vind Website</p>
			<form action="#" method="post">
				<div class="row">                                                                  
					<div class="col-auto" style="width:30%">
						<input type="input" class="form-control" placeholder="Location">
					</div>
					<div class="col-auto" style="width:20%">
						<input type="submit" class="btn btn-primary btn-block" value="Search Events">
					</div>
				</div>
			</form>
  	</div>
	</div><br><hr class="hr-style"><br>

<!--Photo by Johny Goerend on Unsplash-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron1.jpg')}}');">
	<div class="container">
	<h2 align="center">Events</h2>
	</div>
</div><br>

<!-- https://getbootstrap.com/docs/4.3/components/card/
		https://getbootstrap.com/docs/4.3/layout/grid/ -->
<div class="container">
	<div class="row">
		<div class="col order-first">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<a href="/events-en"><img src="{{ asset('images/event/event4.jpg')}}" class="card-img" alt="event"></a>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="/events-en"><h5 class="card-title">Canon - CFVD Fashion on Stage</h5></a>
							<p class="card-text" style="text-align:justify">Kompetisi foto untuk menemukan 3 pemenang terbaik yang terpilih untuk mendapatkan hadiah dengan total senilai Rp 20.000.000,00.
									Berlokasi di Graha Manggala Siliwangi, Bandung.</p>
							<p class="card-text"><small class="text-muted">Jun 11th, 2011</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col order-last">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<a href="/events-en"><img src="{{ asset('images/event/event2.jpg')}}" class="card-img" alt="event"></a>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="/events-en"><h5 class="card-title">Trend Fashion 2016</h5></a>
							<p class="card-text" style="text-align:justify">Audisi untuk model fashion show dengan tema kebaya modern dan muslimah modern. Audisi diselenggarakan di Singapura dan bersifat gratis bagi beserta yang mendaftar dan memenuhi persyaratan.</p>
							<p class="card-text"><small class="text-muted">Jul 17th, 2016</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>

	<div class="row">
		<div class="col order-first">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<a href="/events-en"><img src="{{ asset('images/event/event1.jpg')}}" class="card-img" alt="event"></a>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="/events-en"><h5 class="card-title">Mr & Miss Youth Asia 2017</h5></a>
							<p class="card-text" style="text-align:justify">Audisi pemilihan Mr & Mrs Youth Asia yang diselenggarakan pada 7 hingga 8 januari 2017.</p>
							<p class="card-text"><small class="text-muted">Jan 07th, 2017</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col order-last">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<a href="/events-en"><img src="{{ asset('images/event/event3.jpg')}}" class="card-img" alt="event"></a>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="/events-en"><h5 class="card-title">JFP Model Contest 2018</h5></a>
							<p class="card-text" style="text-align:justify">Lomba fashion show dengan tema pakaian casual.</p>
							<p class="card-text"><small class="text-muted">Feb 17th, 2018</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><br><hr class="hr-style"><br>
	
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron2.jpg')}}');">
	<div class="container">
		<h2 align="center">Frequently Ask Question</h2>
	</div>
</div><br>

	<!--https://getbootstrap.com/docs/4.3/components/collapse/-->
<div class="accordion" id="FAQ">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="collapseOne">
						<p style="color: blue">How can i find the right model?<p>
					</button>
				</h2>
			</div>

			<div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#FAQ">
				<div class="card-body">
					You need to log in first to be able to search the model according to gender, height, and location. 
					This searching feature will appear on the homepage when you log in as photographer, makeup artists, or fashion designers. 
					You can use this feature to find the model correctly and quickly.
					Besides, you can also see the profile page in each model that appears from the search results so that it can be searched further about info and portfolio.
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="collapseTwo">
				<p style="color: blue">How can i apply in available events that i want to participate?</p>
						</button>
					</h2>
			</div>
			<div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
					<div class="card-body">
					You need to log in first to be able to search for events organized by photographer, makeup artists, and fashion designers.
					This searching feature will appear on the homepage when you log in as model. 
					You can use this feature to find the events that you want.
					When choosing an event that appears from the search results, a new page appears that displays detailed information about the event, you can also join the event by pressing the apply button on the same page.
					After that, you are just waiting for info from the event organizer whether it is accepted or not.
				</div>
			</div>
		</div>
</div><br><br>
	@endsection
		
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>