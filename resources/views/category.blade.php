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
				<p style="text-align:center; color:brown">Terdapat beberapa kategori pengguna yang dapat mengakses website Vind, diantaranya model, photographer, fashion designer, dan makeup artist.
				Kategori pengguna tersebut akan mendapatkan beberapa keuntungan apabila menggunakan website ini, diantaranya sebagai berikut.</p><br>
				<div class="well">
					<ul class="list-unstyled">
						<li class="media">
							<img src="{{ asset('images/home-pict.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="model">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Model</b></h5><br>
								<p align="justify">Apabila anda seorang <b>model</b> ada beberapa keuntungan yang akan didapatkan apabila menggunakan website Vind.
								Keuntungan pertama adalah mendaftar sebagai user Vind tidak akan dikenakan biaya apapun dan data diri yang harus dimasukkan tidaklah rumit.
								Selanjutnya, fitur pencarian event berdasarkan lokasi akan muncul apabila anda telah melakukan login.
								Anda dapat melihat info lengkap terkait event yang diinginkan dengan mengklik judul event tersebut. Pada halaman tersebut anda dapat mengklik button daftar apabila tertarik untuk mengikuti event tersebut.
								Selain itu, anda juga dapat menerima maupun menolak penawaran pekerjaan terkait modelling dengan mengklik tombol terima atau tolak pada halaman inbox.
								Agar mendapatkan banyak tawaran pekerjaan, anda harus menampilkan foto portofolio terbaik anda pada halaman profil.
								Anda dapat menerima nomor telepon photographer, makeup artist, atau fashion designer yang bersangkutan apabila ia menerima anda sebagai salah satu pastisipan dalam event yang diselenggarakannya.</p>
							</div>
						</li>
				</div>
				<div class="well">
						<li class="media my-4">
							<img src="{{ asset('images/home-pict2.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="photographer">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Photographer, Fashion Designer, Makeup Artist</b></h5><br>
								<p align="justify">Jika anda seorang <b>photographer, makeup artist, atau fashion designer</b>, terdapat beberapa keuntungan yang akan didapatkan apabila anda menggunakan website Vind. 
								Keuntungan pertama adalah mendaftar sebagai user Vind tidak akan dikenakan biaya apapun dan data diri yang harus dimasukkan tidaklah rumit.
								Selanjutnya, fitur pencarian model berdasarkan lokasi, tinggi badan, dan jenis kelamin akan muncul apabila anda telah melakukan login.
								Anda dapat menelusuri info terkait identitas dan foto portofolio masing-masing pada halaman profil mereka dengan mengklik nama yang muncul dari hasil pencarian. 
								Anda dapat menawarkan mereka pekerjaan dengan mengklik button rekrut pada halaman profil mereka.
								Agar model dapat tertarik untuk menerima tawaran anda, tampilkan foto portofolio terbaik anda pada halaman profil anda.
								Anda dapat menerima nomor telepon model yang bersangkutan apabila ia setuju untuk menerima tawaran pekerjaan anda.</p>
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