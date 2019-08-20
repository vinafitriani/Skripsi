@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'About')
@else
@section('pageTitle', 'Tentang')
@endif

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="{{ asset ('images/pict4.jpg')}}" class="img-thumbnail" alt="Placeholder image">
			</div>
			<div class="col-md-4"><br>
				<h2>{{ trans('sentence.aboutvind') }}</h2>
				<p align="justify">{{ trans('sentence.isiAbout') }}</p>
				<ul>
					<li>Model</li>
					<li>Photographer</li>
					<li>Fashion Designer</li>
					<li>Makeup Artist</li>
				</ul>				
			</div>
		</div>
	</div>
@endsection					
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>