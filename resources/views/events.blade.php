@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Events')
@else
@section('pageTitle', 'Acara')
@endif

@section('content')
	<!--https://getbootstrap.com/docs/4.3/components/breadcrumb/-->
	<div class="container">
		<div class="row">
			<div class="col-auto" style="width:100%">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('profile-plk', $user) }}">Profile</a></li>
						<li class="breadcrumb-item active" aria-current="page">Event</li>
					</ol>
				</nav>
				@if ($user->id === Auth::user()->id)
				<a href="/post-event" class="btn btn-info" role="button">{{ trans('sentence.postevent') }}</a>
				@endif
			</div>
		</div>
	</div><br>

    <!--https://www.w3schools.com/bootstrap/bootstrap_wells.asp-->
    <div class="container"> 		 
		<div class="well well-lg">
			<h4><a href="/apply-event">Canon - CFVD Fashion on Stage</h4></a>
			<div class="media">		
            <img src="{{ asset('images/event/event4.jpg')}}" class="media-object" style="width:100px; padding-right:10px" alt="event">
				<div class="media-body">
					<p style="text-align:justify">Kompetisi foto untuk menemukan 3 pemenang terbaik yang terpilih untuk mendapatkan hadiah dengan total senilai Rp 20.000.000,00.
					Berlokasi di Graha Manggala Siliwangi, Bandung.</p>
                    <small class="text-muted">Jun 11th, 2011</small>
				</div>
			</div>
			@if ($user->id === Auth::user()->id)
			<a href="/edit-event" class="btn btn-success" role="button">EDIT</a>
			<button class="btn btn-danger" type="button">DELETE</a>
			@endif
		</div>
	</div><br>
    @endsection

    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>