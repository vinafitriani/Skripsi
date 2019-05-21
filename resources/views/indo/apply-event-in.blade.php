@extends('app')

@section('title', 'Daftar Acara | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/apply-event-en">English</a>&nbsp &nbsp;
	<a href="/apply-event-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-in">Beranda</a>
		<a href="/inbox-in">Pesan masuk</a>
		<a href="/profile-in">Profil</a>
		<a href="/category-in">Kategori</a>
		<a href="/about-in">Tentang</a>
		<a href="/index-in">Keluar</a>
	</div><br>

	<!-- https://getbootstrap.com/docs/4.3/components/card/ -->
	<div class="container">
		<div class="row">   
			<div class="col">
				<div class="card text-center">
					<div class="card-header">
						Bandung, Indonesia
					</div>
					<div class="card-body">
						<h3 class="card-title">Canon - CFVD Fashion Stage</h3>
						<p class="card-text">Canon - CFVD Fashion Stage merupakan lomba photoshoot yang diselenggarakan di Graha Manggala Siliwangi, Bandung, Indonesia.
						Acara ini diselenggarakan pada hari sabtu, 11 Juni 2011 dari pukul 13.00 - 17.00 WIB. Serta pengumuman lomba akan dilaksanakan pada pukul 20.00 WIB.
						Agar dapat mengikuti acara ini, anda harus melakukan registrasi terlebih dahulu dan administrasi pembayaran sebesar Rp 35.000,00. Setelah melakukan registrasi, anda akan langsung terdaftar sebagai peserta dan berhak mendapatkan majalah CFVD terbaru.
						Hasil foto terbaik akan memenangkan kamera canon dan uang tunai dengan total Rp 20.000.000,00 untuk 3 orang pemenang.</p>
						<img src="{{ asset('images/event/event4.jpg')}}" style="object-fit:contain; width:100%; height:100%; position: center;" class="card-img" alt="event"><br><br>
						<a href="#" class="btn btn-primary">Daftar</a>
					</div>
					<div class="card-footer text-muted">
						11 Juni 2011
					</div>
				</div>
			</div>
		</div>
	</div><br><br>
	@endsection
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>