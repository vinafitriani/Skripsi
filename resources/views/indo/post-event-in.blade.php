@extends('app')

@section('title', 'Tambah Acara | Vind Website')
	
<div class="header">
	<p>Language : &nbsp  
	<a href="/post-event-en">English</a>&nbsp &nbsp;
	<a href="/post-event-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-in">Beranda</a>
		<a href="/inbox-in">Pesan masuk</a>
		<a href="/profile-in">Profil</a>
		<a href="/category-in">Kategori</a>
		<a href="/about-in">Tentang</a>
		<a href="/index-in">Keluar</a>
	</div><br><br>

	<h1 style="color:#8397b3; text-align:center">Tambah Acara</h1>
	<div class="container">
		<div class="shadow p-4 mb-4 bg-white">
			<form action="/action_page.php">
				<div class="form-group">
					<label for="subject">Judul Acara:</label>
					<input type="text" class="form-control" id="subject" placeholder="Masukkan judul acara" name="subject">
				</div>
				<div class="form-group">
					<label for="name">Nama:</label>
					<input type="text" class="form-control" id="name" placeholder="agensi/perusahaan/nama anda" name="name">
				</div>
				<div class="form-group">
					<label for="date_event">Tanggal acara:</label>
					<input type="date" class="form-control" id="date_event" placeholder="Pilih tanggal acara" name="date_event">
				</div>
				<div class="form-group">
					<label for="location_event">Lokasi:</label>
					<input type="text" class="form-control" id="location_event" placeholder="Lokasi acara akan diselenggarakan" name="location_event">
				</div>
				<div class="form-group">
					<label for="description">Deskripsi:</label>
					<textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
				</div>
				<div class="form-group">
					<label for="pict_event">Foto Acara(poster):</label>&nbsp
					<form action="/action_page.php">
						<input type="file" name="pic" accept="image/*">
					</form>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%">Unggah acara</button>
			</form>
		</div>
	</div><br><br>
	@endsection						
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>