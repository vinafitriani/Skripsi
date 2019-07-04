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
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-plk">James Stallon</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Selamat anda diterima untuk suatu pekerjaan. Silahkan hubungi saya melalui nomor telepon ini 081320910304. Terima kasih!</p>
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-plk">Radith Permana</h5></a>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Terima kasih telah mengajukan kerja sama pekerjaan dengan saya. Namun saya meminta maaf karena anda belum bisa ikut serta pada project saya saat ini. Disisi lain, saya mengharapkan anda untuk mengajukan kerja sama pekerjaan dengan saya di lain waktu.Terima kasih!</p>
                </div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

    <div class="container"> 		 
		<div class="well well-lg">
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-plk">Satria Rushdi</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Apakah anda tertarik untuk menjadi model saya?</p>                   
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
            <button class="btn btn-success" type="button">{{ trans('sentence.accept') }}</button>
            <button class="btn btn-warning" type="button">{{ trans('sentence.decline') }}</button>
			<!-- if user accepted the request : muncul form input no telepon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">{{ trans('sentence.phonenumber') }} :</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phonenum">
				</div>
			</div>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-plk">Ratna Indriani</h5></a>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Apakah ada pekerjaan yang sesuai dengan kriteria saya?</p>                   
                </div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
            <button class="btn btn-success" type="button">{{ trans('sentence.accept') }}</button>
            <button class="btn btn-warning" type="button">{{ trans('sentence.decline') }}</button>
			<!-- if user accepted the request : muncul form input no telpon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">{{ trans('sentence.phonenumber') }} :</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phonenum">
				</div>
			</div>
		</div>
	</div><br>

	<div class="container"> 		 
		<div class="well well-lg">
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-model">Jimmy</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Saya menerima tawaran anda. Silahkan hubungi saya melalui nomor telepon ini 081320910304. Terima kasih!</p>
                    <small class="text-muted">Jun 11th, 2019</small>
				</div>
			</div>
			<button class="btn btn-danger" type="button">{{ trans('sentence.delete') }}</button>
		</div>
	</div><br>

	<div class="container"> 		
		<div class="well well-lg">
            <p>Anda mendapat pesan dari :</p>
			<h5><a href="/profile-model">Cindy</h5></a>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Terima kasih atas tawaran anda. Namun saya belum bisa bekerja sama menjadi model anda untuk saat ini. Thank you!</p>
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