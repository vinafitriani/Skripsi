@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Signup')
@else
@section('pageTitle', 'Daftar')
@endif

@section('content')
<h1 style="text-align:center; color:#8397b3">{{ trans('sentence.regpage') }}</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form method="POST" action="{{ route('register') }}" class="needs-validation" style="float:center" novalidate> 
      @csrf
      <div class="form-group">
        <label for="full-name">{{ trans('sentence.name') }}:</label>
        <input type="text" class="form-control" id="full-name" placeholder="Enter your name" name="fullname" maxlength="30" required autofocus>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
        @if ($errors->has('fullname'))
            <div class="error">{{ $errors->first('fullname') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" maxlength="15" required autofocus>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
        @if ($errors->has('username'))
            <div class="error">{{ $errors->first('username') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required autofocus>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
        @if ($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="mail">Email:</label>
        <input type="text" class="form-control" id="mail" placeholder="Enter email address" name="email" required autofocus>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
        @if ($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="loc">{{ trans('sentence.location') }}:</label>
        <input type="text" class="form-control" id="autocomplete" placeholder="Enter location" name="location" onFocus="geolocate()" required>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <div class="form-group">
        <label for="category">{{ trans('sentence.category') }}:</label>
        <select class="custom-select" width="100%" name="category" id="kateg" required>
          <option value="model">Model</option>
          <option value="photographer">Photographer</option>
          <option value="fashion">Fashion Designer</option>
          <option value="makeup">Makeup Artist</option>
        </select>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <div class="model-add">
        <div class="form-group">
          <label for="gender">{{ trans('sentence.gender') }}:</label>
          <select class="custom-select" width="100%" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="hgt">{{ trans('sentence.height') }}:</label>
          <input type="text" class="form-control" id="hgt" placeholder="Enter height(cm)" name="height" maxlength="3">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">{{ trans('sentence.create') }}</button>
    </form>
  </div>
</div><br><br>

<script>
jQuery('#kateg').on('change',function(){
    if(jQuery(this).val()=='model'){
        jQuery('.model-add').show();
    } else {
        jQuery('.model-add').hide();
    }
});
</script>

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

<!-- form validation - https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_validation_needs&stacked=h -->
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

@endsection
