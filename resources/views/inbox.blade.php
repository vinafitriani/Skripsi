@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Inbox')
@else
@section('pageTitle', 'Inbox')
@endif

@section('content')
    <h1 style="text-align:center; color:#8397b3">{{ trans('sentence.inbox') }}</h1><br>
    <!--https://www.w3schools.com/bootstrap/bootstrap_wells.asp-->
    <div class="container"> 		 
		<div class="well well-lg">
			<small class="text-muted">Jun 11th, 2019</small>
            <p>You have a message from :</p>
			<h5><a href="/profile-plk">James Stallon</h5></a>
            <h5>Canon - CFVD Fashion on Stage</h5>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Congratulations you have accepted on this event. Please contact me using this phone number 081320910304. Thank you!</p>
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
			<small class="text-muted">Jul 17th, 2019</small>
            <p>You have a message from :</p>
			<h5><a href="/profile-plk">Radith Permana</h5></a>
            <h5>Trend Fashion 2016</h5>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Thank you for applying this event. But i'm sorry that you can't participate on this event yet. Please join on my another events, i'm so pleased that you can apply my another events.Thank you!</p>
                </div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

    <div class="container"> 		 
		<div class="well well-lg">
			<small class="text-muted">Jan 07th, 2019</small>
            <p>You have a message from :</p>
			<h5><a href="/profile-plk">Satria Rushdi</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Do you wanna be my model?</p>                   
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
            <button class="btn btn-success" type="button">{{ trans('sentence.accept') }}</button>
            <button class="btn btn-warning" type="button">{{ trans('sentence.decline') }}</button>
			<!-- if user accepted the request : muncul form input no telepon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">{{ trans('sentence.phonenumber') }} :</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phonemun">
				</div>
			</div>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
			<small class="text-muted">Feb 17th, 2019</small>
            <p>You have a message from :</p>
			<h5><a href="/profile-plk">Ratna Indriani</h5></a>
            <h5>JFP Model Contest 2018</h5>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Do i fit the criteria for this event?</p>                   
                </div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
            <button class="btn btn-success" type="button">{{ trans('sentence.accept') }}</button>
            <button class="btn btn-warning" type="button">{{ trans('sentence.decline') }}</button>
			<!-- if user accepted the request : muncul form input no telpon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">{{ trans('sentence.phonenumber') }} :</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phonemun">
				</div>
			</div>
		</div>
	</div><br>

	<div class="container"> 		 
		<div class="well well-lg">
            <p>You have a message from :</p>
			<h5><a href="/profile-model">Jimmy</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">I accepted to be your model. Please contact me using this phone number 081320910304. Thank you!</p>
                    <small class="text-muted">Jun 11th, 2019</small>
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

	<div class="container"> 		
		<div class="well well-lg">
            <p>You have a message from :</p>
			<h5><a href="/profile-model">Cindy</h5></a>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">I'm sorry i can't accepted to be your model yet. But i'm so pleased to wait for another opportunity from you.Thank you!</p>
                    <small class="text-muted">Jul 17th, 2019</small>
                </div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>
    @endsection

    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>