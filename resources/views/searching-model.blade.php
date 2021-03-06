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
    	<h1 class="display-4">{{ trans('sentence.recruiterWord')}}</h1>
			<p class="lead">{{ trans('sentence.modelWord2')}}</p>
			<form action="{{route('searching-model')}}" method="post">
			@csrf 
				<div class="row">                                                                  
					<div class="col-auto" style="width:20%">
						<input type="text" class="form-control" id="autocomplete" name="location" placeholder="Location" onFocus="geolocate()">
					</div>
					<div class="col-auto" style="width:20%">
						<div class="wrap-input">
							<select class="custom-select" name="gender" width="100%">
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
	  <h2 style="text-align:center; color:white">{{ trans('sentence.model')}}</h2>
  	</div>
	</div><br>
	
		<div class="container">
				<div class="row">
					@foreach ($userModels as $userModel)
					<div class="col-md-3">
						<div class="card" style="width: 15rem;">
							<div class="card-img">
								<a href="{{ route('profile-model', $userModel) }}">
									@if($userModel->profile_pict==true)
										<img src="{{ asset ($userModel->profile_pict)}}" class="card-img-top" alt="recruiter">
									@else
										<img src="{{ asset ('images/user.png')}}" class="card-img-top" alt="recruiter">
									@endif
								</a>
								<div class="card-body">
									<a href="{{ route('profile-model', $userModel) }}"><h5 class="card-title" style="text-align:center">{{ $userModel->fullname }}</h5></a>
									<p class="text-muted" align="center">{{ $userModel->category }}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach	
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
						<p style="color: blue">Bagaimana saya dapat menemukan model yang sesuai?<p>
					</button>
				</h2>
			</div>

			<div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#FAQ">
				<div class="card-body">
				Anda harus melakukan login terlebih dahulu agar dapat mencari model berdasarkan jenis kelamin, tinggi badan, dan lokasi.
                Fitur pencarian model akan muncul pada homepage ketika anda login sebagai photographer, makeup artist, atau fashion designer.
                Anda dapat menggunakan fitur ini untuk menemukan model secara cepat dan tepat.
                Selain itu, anda juga dapat melihat halaman profil setiap model yang muncul dari hasil pencarian untuk mencari tau identitas dan fotoportofolio model bersangkutan.
				</div>
			</div>
  		</div>
  		<div class="card">
			<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="collapseTwo">
				<p style="color: blue">Bagaimana cara mengajukan kerja sama pekerjaan pada perekrut?</p>
						</button>
					</h2>
			</div>
			<div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
					<div class="card-body">
					Anda harus melakukan login terlebih dahulu agar dapat mengajukan kerja sama pekerjaan pada perekrut.
					Fitur pencarian perekrut akan muncul pada homepage ketika anda login sebagai model.
					Anda dapat menggunakan fitur ini untuk mengajukan kerja sama pekerjaan pada perekrut secara cepat.
					Selain itu, anda juga dapat melihat halaman profil setiap perekrut yang muncul dari hasil pencarian untuk mencari tau identitas dan foto portfolio model bersangkutan.
					Apabila anda tertarik, maka anda dapat menekan button ask for job.
					Setelah itu, anda tinggal menunggu pesan masuk dari perekrut tersebut melalui halaman inbox.
				</div>
			</div>
		</div>
	</div><br><br>
	
	<script>
		// This example displays an address form, using the autocomplete feature
		// of the Google Places API to help users fill in the information.
  
		// This example requires the Places library. Include the libraries=places
		// parameter when you first load the API. For example:
		// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
  
		var placeSearch, autocomplete;
		var componentForm = {
		  street_number: 'short_name',
		  route: 'long_name',
		  locality: 'long_name',
		  administrative_area_level_1: 'short_name',
		  country: 'long_name',
		  postal_code: 'short_name'
		};
  
		function initAutocomplete() {
		  // Create the autocomplete object, restricting the search to geographical
		  // location types.
		  autocomplete = new google.maps.places.Autocomplete(
			  /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
			  {types: ['geocode']});
  
		  // When the user selects an address from the dropdown, populate the address
		  // fields in the form.
		  autocomplete.addListener('place_changed', fillInAddress);
		}
  
		function fillInAddress() {
		  // Get the place details from the autocomplete object.
		  var place = autocomplete.getPlace();
  
		  for (var component in componentForm) {
			document.getElementById(component).value = '';
			document.getElementById(component).disabled = false;
		  }
  
		  // Get each component of the address from the place details
		  // and fill the corresponding field on the form.
		  for (var i = 0; i < place.address_components.length; i++) {
			var addressType = place.address_components[i].types[0];
			if (componentForm[addressType]) {
			  var val = place.address_components[i][componentForm[addressType]];
			  document.getElementById(addressType).value = val;
			}
		  }
		}
  
		// Bias the autocomplete object to the user's geographical location,
		// as supplied by the browser's 'navigator.geolocation' object.
		function geolocate() {
		  if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			  var geolocation = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			  };
			  var circle = new google.maps.Circle({
				center: geolocation,
				radius: position.coords.accuracy
			  });
			  autocomplete.setBounds(circle.getBounds());
			});
		  }
		}
  </script>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
		  async defer></script>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	@endsection