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
								<p align="justify">Apabila anda seorang <b>model</b> ada beberapa keuntungan yang akan didapatkan apabila menggunakan <i>website</i> Vind.
								Keuntungan pertama adalah mendaftar sebagai <i>user</i> Vind tidak akan dikenakan biaya apapun dan data diri yang harus dimasukkan tidaklah rumit.
								Selanjutnya, fitur pencarian perekrut berdasarkan lokasi akan muncul apabila anda telah melakukan <i>login</i>.
								Anda dapat melihat identitas dan foto portfolio terkait perekrut dengan mengklik nama ataupun foto perekrut tersebut. Setelah itu, apabila anda tertarik dapat menghubungi <i>user</i> perekrut melalui alamat email.
								Agar mendapatkan banyak tawaran pekerjaan, anda harus menampilkan foto portofolio terbaik anda pada halaman profil.</p>
							</div>
						</li>
				</div>
				<div class="well">
						<li class="media my-4">
							<img src="{{ asset('images/home-pict2.jpg')}}" style="object-fit:contain; width:30%; height:30%;" class="mr-3" alt="photographer">
							<div class="media-body">
								<h5 class="mt-0 mb-1"><b>Photographer, Fashion Designer, Makeup Artist</b></h5><br>
								<p align="justify">Jika anda seorang <b>photographer, makeup artist, atau fashion designer</b>, terdapat beberapa keuntungan yang akan didapatkan apabila anda menggunakan <i>website</i> Vind. 
								Keuntungan pertama adalah mendaftar sebagai <i>user</i> Vind tidak akan dikenakan biaya apapun dan data diri yang harus dimasukkan tidaklah rumit.
								Selanjutnya, fitur pencarian model berdasarkan lokasi, tinggi badan, dan jenis kelamin akan muncul apabila anda telah melakukan <i>login</i>.
								Anda dapat menelusuri info terkait identitas dan foto portfolio masing-masing pada halaman profil mereka dengan mengklik nama yang muncul dari hasil pencarian. 
								Anda dapat menawarkan mereka pekerjaan dengan menghubungi <i>user</i> model melalui alamat email pada halaman profil mereka.</p>
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