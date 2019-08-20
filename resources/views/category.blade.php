@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Category')
@else
@section('pageTitle', 'Kategori')
@endif

@section('content')
	<div class="container"> 
		<div class="row">
			<div class="col-md-auto"><br>
				<h1 style="text-align:center; color:#8397b3">{{ trans('sentence.usercategory') }}</h1>
				<p style="text-align:center; color:brown">{{ trans('sentence.introCategory') }}</p><br>
				<div class="well">
					<ul class="list-unstyled">
						<li class="media">
							<img src="{{ asset('images/home-pict.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="model">
							<div class="media-body">
								<h5><b>Model</b></h5><br>
								<p align="justify">{{ trans('sentence.modelCategory') }}</p>
							</div>
						</li>
				</div>
				<div class="well">
						<li class="media my-4">
							<img src="{{ asset('images/home-pict2.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="photographer">
							<div class="media-body">
								<h5><b>Photographer, Fashion Designer, Makeup Artist</b></h5><br>
								<p align="justify">{{ trans('sentence.recruiterCategory') }}</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><br><br>
	@endsection
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>