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
				<p align="justify">Vind merupakan website job searching untuk model peraga busana, serta membantu photographer, fashion designer, dan makeup artist dalam menemukan model yang sesuai dengan kategori yang diinginkan berdasarkan lokasi, jenis kelamin, dan tinggi badan.
                        Anda dapat mencari model yang diinginkan melalui fitur searching pada homepage setelah melakukan login.
                        Selain itu, Vind menyediakan tampilan profil untuk setiap user dimana terdapat foto-foto portofolio yang dapat digunakan sebagai bahan pertimbangan dalam proses perekrutan seorang model.</p>
				<p align="justify">User yang telah melakukan login sebagai photographer, makeup artist, atau fashion designer dapat mempublikasikan event dengan memasukkan detail acara pada halaman post event yang terdapat pada halaman profil.
								Model yang ikut serta pada event yang bersangkutan akan muncul pada pesan masuk penyelenggara event tersebut, dimana penyelenggara berhak untuk menerima maupun menolak model yang telah mendaftar dengan mengklik button terima atau tolak di bawah pesan tersebut.
				<p align="justify">Vind membantu mempermudah pekerjaan bagi seseorang yang memiliki profesi sebagai berikut :</p>
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