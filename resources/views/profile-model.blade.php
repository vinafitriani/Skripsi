@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Profile')
@else
@section('pageTitle', 'Profil')
@endif

@section('content')
	<!-- https://getbootstrap.com/docs/4.3/components/card/ -->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="shadow p-4 mb-4 bg-white">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
						@if($user->profile_pict==true)
							<img src="{{ asset ($user->profile_pict)}}" class="card-img-top" alt="profile picture">
						@else
							<img src="{{ asset ('images/user.png')}}" class="card-img-top" alt="profile picture">
						@endif
							<div class="card-body">
							@if ($user->id === Auth::user()->id)
								<!--https://www.w3schools.com/bondotstrap4/tryit.asp?filename=trybs_modal&stacked=h-->
							<button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								edit profile
							</button><br><br>
							<button type="button" style="width:100%" class="btn btn-success" data-toggle="modal" data-target="#modalPict">
								change photo
							</button>
							@endif

							<!-- The Modal -->
							<div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">
								
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Edit Profile</h4>											
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<p>Masukkan data yang ingin anda edit saja</p>
										<!-- Modal body -->
										<div class="modal-body">
											<form action="/action_page.php">
												<div class="form-group">
													<label for="uname">{{ trans('sentence.name') }} :</label>
													<input type="text" class="form-control" id="uname" placeholder="Masukkan nama lengkap" name="fullname">
												</div>
												<div class="form-group">
													<label for="loc">{{ trans('sentence.location') }} :</label>
													<input type="text" class="form-control" id="autocomplete" placeholder="Masukkan kota tempat tinggal anda" onFocus="geolocate()" name="location">
												</div>
												<div class="form-group">
													<label for="gender">{{ trans('sentence.gender') }} :</label>
													<select class="custom-select" width="100%">
														<option value="male">Male</option>
														<option value="female">Female</option>
													</select>
												</div>
												<div class="form-group">
													<label for="hgt">{{ trans('sentence.height') }} :</label>
													<input type="text" class="form-control" id="hgt" placeholder="Masukkan tinggi badan(cm)" name="height">
												</div>
												<button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
											</form>
										</div>
									
										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>									
									</div>
								</div>
							</div>
							<div class="modal" id="modalPict">
								<div class="modal-dialog">
									<div class="modal-content">
									
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Change Photo</h4>											
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<form action="{{ route('pict.update')}}" method="post" enctype="multipart/form-data">
											@csrf
												<div class="form-group">
													<input type="file" class="form-control" id="uname"  name="photo">
												</div>																																				
												<button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
											</form>
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>									
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-auto" style="width:800px">
				<div class="shadow p-4 mb-4 bg-white">
					<div class="panel-group" style="width: 100%;">
						<div class="panel panel-success">
							<div class="panel-heading">
							{{ trans('sentence.profile') }}
							</div>
							<div class="panel-body">
								<h3 style="text-align:center">{{ $user->fullname }}</h3>
								<h6 style="text-align:center; color:brown">{{ $user->category }}</h6>
								<hr>
								<table class="table table-borderless">
									<tbody>
										<tr>
											<td>{{ trans('sentence.name') }}</td>
											<td style="color:green">{{ $user->fullname }}</td>
										</tr>									
										<tr>
											<td>{{ trans('sentence.location') }}</td>
											<td style="color:green">{{ $user->location }}</td>
										</tr>
										<tr>
											<td>{{ trans('sentence.gender') }}</td>
											<td style="color:green">{{ $usermodel->gender }}</td>
										</tr>
										<tr>
											<td>{{ trans('sentence.height') }}</td>
											<td style="color:green">{{ $usermodel->height }} cm</td>
										</tr>
									</tbody>									
								</table>
								<button class="btn btn-success" type="submit" name="recruit" style="width:100%">{{ trans('sentence.recruit') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
  	<div class="container">
	  <h2 style="text-align:center; color:white">Portfolio</h2>
  	</div>
	</div><br>

	@if ($user->id === Auth::user()->id)
	<form action="{{ route('portfolio-model.update')}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="file btn button-lg" style="width:1110px">
						<p style="float:left">Upload Portfolio : &nbsp
						<input type="file" name="file"/></p>
						<button type="submit" class="btn btn-outline-info" style="float:right">Submit</button>
					</div><br>
				</div>
			</div>
		</div><br><br>
	</form>
	@endif

	<div class="container">
		<div class="row">
		@foreach ($picts as $pict)
			<div class="col-sm">					
				<div class="card" style="width: 15rem;">
					<div class="card-img">
							<img src="{{ $pict->url }}" class="card-img-top" alt="model">
							@if ($user->id === Auth::user()->id)
							<div class="card-body">
								<button class="btn btn-danger" type="submit" style="width:100%">delete</button>
							</div>
							@endif
					</div>
				</div>					
			</div>	
			@endforeach
		</div>
	</div>
	@endsection						
	
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