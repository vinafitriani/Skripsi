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
						<li class="breadcrumb-item"><a href="/profile-plk">Profile</a></li>
						<li class="breadcrumb-item active" aria-current="page">Events</li>
					</ol>
				</nav>
				<a href="/post-event" class="btn btn-info" role="button">Post New Event</a>
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
			<a href="/edit-event" class="btn btn-success" role="button">EDIT</a>
			<button class="btn btn-danger" type="button">Delete</a>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
			<h4><a href="/apply-event">Trend Fashion 2016</h4></a>
			<div class="media">	
            <img src="{{ asset('images/event/event2.jpg')}}" class="media-object" style="width:100px; padding-right:10px" alt="event">			
				<div class="media-body">
					<p style="text-align:justify">Audisi untuk model fashion show dengan tema kebaya modern dan muslimah modern. Audisi diselenggarakan di Singapura dan bersifat gratis bagi beserta yang mendaftar dan memenuhi persyaratan.</p>
                    <small class="text-muted">Jul 17th, 2016</small>
                </div>
			</div>
			<a href="/edit-event" class="btn btn-success" role="button">EDIT</a>
			<button class="btn btn-danger" type="button">Delete</a>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
			<h4><a href="/apply-event">Mr & Miss Youth Asia 2017</h4></a>
			<div class="media">	
            <img src="{{ asset('images/event/event1.jpg')}}" class="media-object" style="width:100px; padding-right:10px" alt="event">			
				<div class="media-body">
					<p style="text-align:justify">Audisi pemilihan Mr & Mrs Youth Asia yang diselenggarakan pada 7 hingga 8 januari 2017.</p>
                    <small class="text-muted">Jan 07th, 2017</small>
                </div>
			</div>
			<a href="/edit-event" class="btn btn-success" role="button">EDIT</a>
			<button class="btn btn-danger" type="button">Delete</a>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
			<h4><a href="/apply-event">JFP Model Contest 2018</h4></a>
			<div class="media">	
            <img src="{{ asset('images/event/event3.jpg')}}" class="media-object" style="width:100px; padding-right:10px" alt="event">			
				<div class="media-body">
					<p style="text-align:justify">Lomba fashion show dengan tema pakaian casual.</p>
                    <small class="text-muted">Feb 17th, 2018</small>
                </div>
			</div><br>
			<a href="/edit-event" class="btn btn-success" role="button">EDIT</a>
			<button class="btn btn-danger" type="button">Delete</a>
		</div>
	</div><br>
    @endsection

    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>