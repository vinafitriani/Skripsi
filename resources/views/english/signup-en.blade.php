@extends('app')

@section('title', 'Signup | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/signup-en">English</a>&nbsp &nbsp;
	<a href="/signup-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

<div class="topnav">
  <a href="/index-en">Home</a>
  <a href="/profile-en">Profile</a>
  <a href="/category-en">Category</a>
  <a href="/about-en">About</a>
  <a href="/signin-en">Sign in</a>
  <a class="active" href="/signup-en">Sign up</a>
</div><br>

<h1 style="text-align:center; color:#8397b3">Signup Page</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form action="/action_page.php" class="needs-validation" style="float:center" novalidate>
      <div class="form-group">
        <label for="full-name">Name:</label>
        <input type="text" class="form-control" id="full-name" placeholder="Enter your name" name="fullname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="mail">Email:</label>
        <input type="text" class="form-control" id="mail" placeholder="Enter email address" name="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="loc">Location:</label>
        <input type="text" class="form-control" id="autocomplete" placeholder="Enter location" name="location" onFocus="geolocate()" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="prof-pict">Profile picture:</label>
        <form action="/action_page.php">
          <input type="file" name="profile-pict" accept="image/*" required>
        </form>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please upload your profile picture.</div>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select class="custom-select" width="100%" required>
          <option value="model">Model</option>
          <option value="photographer">Photographer</option>
          <option value="fashion">Fashion Designer</option>
          <option value="makeup">Makeup Artist</option>
        </select>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="custom-select" width="100%" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="hgt">Height:</label>
        <input type="text" class="form-control" id="hgt" placeholder="Enter height(cm)" name="height" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">create account</button>
    </form>
  </div>
</div><br><br>
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