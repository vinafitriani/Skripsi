@extinds('app')

@section('title', 'Tentang | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/about-en">English</a>&nbsp &nbsp;
	<a href="/about-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

<div class="topnav">
	<a href="/index-in">Beranda</a>
	<a href="/category-in">Kategori</a>
	<a class="active" href="/about-in">Tentang</a>
	<a href="/signin-in">Masuk</a>
	<a href="/signup-in">Daftar</a>
</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="{{ asset ('images/pict4.jpg')}}" class="img-thumbnail" alt="Placeholder image">
			</div>
			<div class="col-md-4"><br>
				<h2>Tentang</h2>
				<p align="justify">Vind merupakan website <i>job searching</i> untuk model peraga busana, serta membantu pihak fotografer, desainer pakaian, dan jasa makeup dalam menemukan model yang sesuai dengan kategori yang diinginkan seperti tinggi badan, jenis kelamin, bahkan lokasi.
					Kategori dapat anda cari pada fitur <i>searching</i> yang akan muncul setelah melakukan <i>login</i>.
					Selain itu, website ini akan menampilkan hasil - hasil foto pada halaman profil <i>user</i> yang akan menjadi bahan pertimbangan dalam memilih kandidat yang tepat.
					Website ini dapat membantu mempermudah pekerjaan bagi seseorang yang memiliki profesi sebagai berikut :</p>
				<ul>
					<li>Model</li>
					<li>Photographer</li>
					<li>Fashion Designer</li>
					<li>Makeup Artist</li>
				</ul>				
			</div>
		</div>
	</div>
@indsection					
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>