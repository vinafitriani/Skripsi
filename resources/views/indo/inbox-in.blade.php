@extends('app')

@section('title', 'Pesan masuk | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/inbox-en">English</a>&nbsp &nbsp;
	<a href="/inbox-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-in">Beranda</a>
		<a class="active" href="/inbox-in">Pesan masuk</a>
		<a href="/profile-in">Profil</a>
		<a href="/category-in">Kategori</a>
		<a href="/about-in">Tentang</a>
		<a href="/index-in">Keluar</a> 
	</div><br>

    <h1 style="text-align:center; color:#8397b3">Pesan Masuk</h1><br>
    <!--https://www.w3schools.com/bootstrap/bootstrap_wells.asp-->
    <div class="container"> 		 
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-plk-en">James Stallon</h5></a>
            <h5>Canon - CFVD Fashion on Stage</h5>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Selamat anda diterima untuk berpartisipasi dalam acara ini. Silahkan menghubungi saya melalui nomor telepon ini 081320910304. Terima kasih!</p>
                    <small class="text-muted">Jun 11th, 2019</small>
				</div>
			</div>
			<button class="btn btn-danger" type="button">Hapus</button>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-plk-en">Radith Permana</h5></a>
            <h5>Trend Fashion 2016</h5>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Terima kasih telah mendaftar pada event ini. Namun saya meminta maaf karena anda belum dapat berpartisipasi dalam event ini. Saya mengharapkan anda tertarik untuk mendaftar pada event saya lainnya. Terima kasih!</p>
                    <small class="text-muted">May 17th, 2019</small>
                </div>
			</div>
			<button class="btn btn-danger" type="button">Hapus</button>
		</div>
	</div><br>

    <div class="container"> 		 
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-plk-en">Satria Rushdi</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Apakah anda tertarik untuk menjadi model saya?</p>
                    <small class="text-muted">Apr 07th, 2019</small>
				</div>
			</div>
			<button class="btn btn-danger" type="button">hapus</button>
            <button class="btn btn-success" type="button">terima</button>
            <button class="btn btn-warning" type="button">tolak</button>
			<!-- if user accepted the request : muncul form input no telpon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">Nomor telepon:</label>
					<input type="text" class="form-control" id="phone" placeholder="Masukkan nomor telepon anda" name="phonemun">
				</div>
			</div>
		</div>
	</div><br>

    <div class="container"> 		
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-model-en">Ratna Indriani</h5></a>
            <h5>JFP Model Contest 2019</h5>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify; color:brown">Apakah saya sesuai kriteria untuk mengikuti event anda?</p>
                    <small class="text-muted">Feb 17th, 2018</small>
                </div>
			</div>
			<button class="btn btn-danger" type="button">hapus</button>
            <button class="btn btn-success" type="button">terima</button>
            <button class="btn btn-warning" type="button">tolak</button>
			<!-- if user accepted the request : muncul form input no telpon -->
			<div class="container">
				<div class="form-group">
					<label for="phone">Nomor telepon:</label>
					<input type="text" class="form-control" id="phone" placeholder="Masukkan nomor telepon anda" name="phonemun">
				</div>
			</div>

		</div>
	</div><br>

	<div class="container"> 		 
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-model-en">Jimmy</h5></a>
			<div class="media">		
				<div class="media-body">
					<p style="text-align:justify; color:brown">Saya bersedia untuk menjadi model anda. Silahkan menghubungi saya melalui nomor telepon ini 081320910304. Terima kasih!</p>
                    <small class="text-muted">Jun 11th, 2019</small>
				</div>
			</div>
			<button class="btn btn-danger" type="button">Hapus</button>
		</div>
	</div><br>

	<div class="container"> 		
		<div class="well well-lg">
            <p>Anda memiliki pesan dari :</p>
			<h5><a href="/profile-model-en">Cindy</h5></a>
			<div class="media">	
				<div class="media-body">
					<p style="text-align:justify">Mohon maaf saya belum bisa menjadi model anda untuk saat ini. Namun, saya akan merasa sangat senang apabila saya masih mendapatkan kesempatan untuk menjadi model anda di lain kesempatan. Terima kasih!</p>
                    <small class="text-muted">Jul 17th, 2019</small>
                </div>
			</div>
			<button class="btn btn-danger" type="button">Hapus</button>
		</div>
	</div><br>
    @endsection

    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>