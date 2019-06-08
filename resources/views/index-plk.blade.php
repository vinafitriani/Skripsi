@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Home')
@else
@section('pageTitle', 'Beranda')
@endif

@section('content')
<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
  	<div class="container">
    	<h1 class="display-4">Recruit any Top Models</h1>
			<p class="lead">from using Vind Website</p>
			<form action="#" method="post">
				<div class="row">                                                                  
					<div class="col-auto" style="width:20%">
						<input type="text" class="form-control" name="location" placeholder="Location">
					</div>
					<div class="col-auto" style="width:20%">
						<div class="wrap-input">
							<select class="custom-select" width="100%">
									<option value="male">Male</option>
									<option value="female">Female</option>
							</select>								
						</div>	
					</div>	
					<div class="col-auto" style="width:20%">
							<input type="text" class="form-control" name="height" placeholder="Height(cm)">
					</div>
					<div class="col-auto" style="width:20%">
						<input type="submit" class="btn btn-primary btn-block" value="Search">
					</div>
				</div>
			</form>
  	</div>
	</div><br><hr class="hr-style"><br>
	
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
  	<div class="container">
	  <h2 style="text-align:center; color:white">Models</h2>
  	</div>
	</div><br>
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model1.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Giselle Olivia</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Anastasia Sinclair</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
				<div class="card-img">
					<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model3.jpg')}}" class="card-img-top" alt="model"></a>
					<div class="card-body">
						<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Natalie Kardashian</h5></a>
					</div>
				</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model4.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Rachel Schewarzeneger</h5></a>
						</div>
					</div>
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male1.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Ryan</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male2.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Mario</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
				<div class="card-img">
					<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male3.jpg')}}" class="card-img-top" alt="model"></a>
					<div class="card-body">
						<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Patrick</h5></a>
					</div>
				</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male4.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Leonard</h5></a>
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