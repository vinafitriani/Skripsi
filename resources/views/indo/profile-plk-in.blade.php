@extends('app')

@section('title', 'Profil | Vind Website')
	
<div class="header">
	<p>Language : &nbsp  
	<a href="/index-model-en">English</a>&nbsp &nbsp;
	<a href="/index-model-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-in">Beranda</a>
		<a href="/inbox-in">Pesan masuk</a>
		<a class="active" href="/profile-in">Profil</a>
		<a href="/category-in">Kategori</a>
		<a href="/about-in">Tentang</a>
		<a href="/index-in">Keluar</a>
	</div><br>
	
	<!--https://getbootstrap.com/docs/4.3/components/breadcrumb/-->
	<div class="container">
		<div class="row">
			<div class="col-auto" style="width:100%">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Profil</li>
						<li class="breadcrumb-item"><a href="/events-in">Acara</a></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<!-- https://getbootstrap.com/docs/4.3/components/card/ -->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="shadow p-4 mb-4 bg-white">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
							<img src="{{ asset ('images/pict3.jpg')}}" class="card-img-top" alt="profile picture">
							<div class="card-body">
							<!--https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_modal&stacked=h-->
							<button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								edit profil
							</button>

							<!-- The Modal -->
							<div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">
									
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Edit Profil</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
											<form action="/action_page.php">
												<div class="form-group">
													<label for="uname">Nama:</label>
													<input type="text" class="form-control" id="uname" placeholder="Masukkan nama lengkap" name="fullname">
												</div>
												<div class="form-group">
													<label for="mail">Email:</label>
													<input type="text" class="form-control" id="mail" placeholder="Masukkan alamat email" name="email">
												</div>
												<div class="form-group">
													<label for="loc">Lokasi:</label>
													<input type="text" class="form-control" id="autocomplete" placeholder="Masukkan lokasi" onFocus="geolocate()" name="location">
												</div>												
												<div class="form-group">
													<label for="prof-pict">Foto Profil:</label>
													<form action="/action_page.php">
														<input type="file" name="profile-pict" accept="image/*">
													</form>
												</div>
												<button type="submit" class="btn btn-primary" style="width:100%">Konfirmasi</button>
											</form>
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
									Profil
								</div>
								<div class="panel-body">
									<h3 style="text-align:center">Vina Nur Fitriani</h3>
									<h6 style="text-align:center; color:brown">Fashion Designer</h6>
									<hr>
									<table class="table table-borderless">
										<tbody>
											<tr>
												<td>Nama</td>
												<td style="color:green">Vina Nur Fitriani</td>
											</tr>
											<tr>
												<td>Email</td>
												<td style="color:green">vinanurfitriani@gmail.com</td>
											</tr>
											<tr>
												<td>Lokasi</td>
												<td style="color:green">bandung</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
  	<div class="container">
	  <h2 style="text-align:center; color:white">Portofolio</h2>
  	</div>
	</div><br>

	<!-- https://getbootstrap.com/docs/4.3/components/card/ -->
	<div class="container">
		<div class="row">
			<div class="col-auto">
				<div class="file btn button-lg" style="width:1110px">
					<p style="float:left">Unggah Portofolio : &nbsp
					<input type="file" name="file"/></p>
					<button type="button" class="btn btn-outline-info" style="float:right">Unggah</button>
				</div><br>
			</div>
		</div>
	</div><br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<img src="{{ asset('images/portfolio/model1.jpg')}}" class="card-img-top" alt="model">
						<div class="card-body">
						<small class="text-muted">march 13, 2019</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model">
						<div class="card-body">
						<small class="text-muted">march 12, 2019</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<img src="{{ asset('images/portfolio/model3.jpg')}}" class="card-img-top" alt="model">
						<div class="card-body">
							<small class="text-muted">march 11, 2019</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<img src="{{ asset('images/portfolio/model4.jpg')}}" class="card-img-top" alt="model">
						<div class="card-body">
						<small class="text-muted">march 10, 2019</small>
						</div>
					</div>
				</div>
			</div>
		</div><br>

			<div class="row">
				<div class="col-sm">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
							<img src="{{ asset('images/portfolio/model1.jpg')}}" class="card-img-top" alt="model">
							<div class="card-body">
								<small class="text-muted">march 9, 2019</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
							<img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model">
							<div class="card-body">
								<small class="text-muted">march 8, 2019</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
							<img src="{{ asset('images/portfolio/model3.jpg')}}" class="card-img-top" alt="model">
							<div class="card-body">
								<small class="text-muted">march 7, 2019</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="card" style="width: 15rem;">
						<div class="card-img">
							<img src="{{ asset('images/portfolio/model4.jpg')}}" class="card-img-top" alt="model">
							<div class="card-body">
							<small class="text-muted">march 6, 2019</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>
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