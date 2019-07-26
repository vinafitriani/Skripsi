@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Login')
@else
@section('pageTitle', 'Masuk')
@endif

@section('content')
<h1 style="text-align:center; color:#8397b3">{{ trans('sentence.login') }}</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form method="POST" action="{{ route('login') }}" class="needs-validation" style="float:center" novalidate>
    @csrf
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" maxlength="15" required>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" maxlength="8" required>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">{{ trans('sentence.login') }}</button>
    </form>
  </div>
</div><br><br>
@endsection

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
