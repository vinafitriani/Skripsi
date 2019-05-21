@extends('app')

@section('title', 'Kategori | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/category-en">English</a>&nbsp &nbsp;
	<a href="/category-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-in">Home</a>
		<a class="active" href="/category-in">Kategori</a>
		<a href="/about-in">Tentang</a>
		<a href="/signin-in">Masuk</a>
		<a href="/signup-in">Daftar</a>
	</div>
	
	<div class="container"> 
		<div class="row">
			<div class="col-md-auto"><br>
				<h1 style="text-align:center; color:#8397b3">Kategori Pengguna</h1>
				<p style="text-align:center; color:brown">Terdapat beberapa kategori pengguna yang dapat mengakses website Vind, diantaranya model, fotografer, jasa makeup, dan perancang busana.
							Pengguna memiliki beberapa keuntungan ketika mengakses Vind, keuntungan yang didapat akan dijelaskan sebagai berikut.</p><br>
				<div class="well">
					<ul class="list-unstyled">
						<li class="media">
							<img src="{{ asset('images/home-pict.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="model">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Model</b></h5><br>
								<p align="justify">Jika anda seorang <b>model</b>, maka terdapat beberapa keuntungan yang akan didapat apabila  menggunakan website Vind.
							Keuntungan yang pertama adalah, untuk mendaftar di website ini anda tidak akan dikenakan biaya apapun.
							Selanjutnya, akan muncul fitur pencarian di homepage yang akan menampilkan acara - acara berdasarkan lokasi apabila anda telah melakukan login.
							Anda dapat mengikuti berbagai macam acara yang tersedia, dan bertanya secara langsung kepada penyelenggara acara melalui fitur chatting.
							Anda juga dapat menerima tawaran pekerjaan dari fotografer, perancang busana, maupun jasa makeup.
							Agar dapat mendapatkan banyak tawaran, anda harus menampilkan hasil foto - foto portofolio anda yang menarik di halaman profil anda sendiri.</p>
							</div>
						</li>
				</div>
				<div class="well">
						<li class="media my-4">
							<img src="{{ asset('images/home-pict2.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="photographer">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Photographer, Fashion Designer, Makeup Artist</b></h5><br>
								<p align="justify">ika anda seorang <b>photographer, fashion Designer, atau makeup artist</b>, maka terdapat beberapa keuntungan yang akan didapat apabila  menggunakan website Vind.
							Keuntungan yang pertama adalah, untuk mendaftar di website ini anda tidak akan dikenakan biaya apapun.
							Selanjutnya, anda dapat mencari model yang sesuai dengan mudah, tepat, dan cepat dengan menggunakan fitur pencarian yang akan muncul setelah melakukan login.
							Hasil dari pencarian yang berdasarkan jenis kelamin, tinggi badan, dan lokasi adalah thumbnail model - model dan nama - namanya, anda juga dapat menelusuri halaman profil tiap modelnya untuk melihat biodata dan portofolionya. 
							Anda dapat bertanya secara langsung kepada model mengenai job yang ingin anda tawarkan melalui fitur chatting.
							Agar dapat meyakinkan model dan mendapatkan kerjasama untuk suatu pekerjaan, anda harus menampilkan hasil foto - foto portofolio anda yang menarik di halaman profil anda sendiri.
							Keuntungan yang terpenting adalah anda dapat mengunggah info acara yang akan anda selenggarakan dan tinggal menunggu kandidat untuk ikut serta dalam acara anda.</p>
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