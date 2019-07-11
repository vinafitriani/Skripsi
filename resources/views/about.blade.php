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
				<p align="justify">Vind merupakan <i>website job searching</i> untuk model peraga busana, serta membantu <i>photographer, fashion designer,</i> dan <i>makeup artist</i> dalam menemukan model yang sesuai dengan kategori yang diinginkan berdasarkan lokasi, jenis kelamin, dan tinggi badan.
                        Anda dapat mencari model yang diinginkan melalui fitur pencarian pada <i>homepage</i> setelah melakukan <i>login</i>.
                        Selain itu, Vind menyediakan tampilan profil untuk setiap <i>user</i> dimana terdapat foto-foto portfolio yang dapat digunakan sebagai bahan pertimbangan dalam proses perekrutan seorang model.</p>
				<p align="justify">User yang telah melakukan <i>login</i> sebagai <i>photographer, makeup artist,</i> atau <i>fashion designer</i> dapat merekrut model dengan <i>user</i> model pada halaman profil.
								Namun, apabila anda melakukan <i>login</i> sebagai model maka anda dapat melakukan pengajuan kerja sama pekerjaan kepada perekrut dengan menghubungi <i>user</i> perekrut melalui alamat email pada halaman profil.
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