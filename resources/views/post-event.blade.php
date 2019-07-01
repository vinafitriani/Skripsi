@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Post Event')
@else
@section('pageTitle', 'Post Event')
@endif

@section('content')
	<h1 style="color:#8397b3; text-align:center">Post Event</h1>
	<div class="container">
		<div class="shadow p-4 mb-4 bg-white">
			<form method="POST" action="{{ route('post-event') }}" class="needs-validation" novalidate> 
				<div class="form-group">
					<label for="subject">{{ trans('sentence.subject') }} :</label>
					<input type="text" class="form-control" id="subject" placeholder="subject event" name="subject" required>
					<div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
					<div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
					@if ($errors->has('subject'))
						<div class="error">{{ $errors->first('subject') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="date_event">{{ trans('sentence.date') }} :</label>
					<input type="date" class="form-control" id="date_event" placeholder="pick the date" name="date_event" required>
					<div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
					<div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
					@if ($errors->has('date_event'))
						<div class="error">{{ $errors->first('date_event') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="location_event">{{ trans('sentence.location') }} :</label>
					<input type="text" class="form-control" id="location_event" placeholder="location that event will be held" name="location_event" required>
					<div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
					<div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
					@if ($errors->has('location_event'))
						<div class="error">{{ $errors->first('location_event') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="description">{{ trans('sentence.description') }} :</label>
					<textarea name="description" class="form-control" id="description" cols="30" rows="5" required></textarea>
					<div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
					<div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
					@if ($errors->has('description'))
						<div class="error">{{ $errors->first('description') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pict_event">{{ trans('sentence.eventpicture') }} :</label>&nbsp
					<form action="/action_page.php">
						<input type="file" name="pic" accept="image/*">
					</form>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
			</form>
		</div>
	</div><br><br>

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

	@endsection						
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>