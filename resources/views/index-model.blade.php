@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Home')
@else
@section('pageTitle', 'Beranda')
@endif

@section('content')
	<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
  	<div class="container">
    	<h1 class="display-4">Become a Top Models</h1>
			<p class="lead">from using Vind Website</p>
			<form action="#" method="post">
				<div class="row">                                                                  
					<div class="col-auto" style="width:30%">
						<input type="input" class="form-control" placeholder="Location">
					</div>
					<div class="col-auto" style="width:20%">
						<input type="submit" class="btn btn-primary btn-block" value="Search Recruiters">
					</div>
				</div>
			</form>
  	</div>
	</div><br><hr class="hr-style"><br>

<!--Photo by Johny Goerend on Unsplash-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron1.jpg')}}');">
	<div class="container">
	<h2 align="center">The Recruiters</h2>
	</div>
</div><br>

<!-- https://getbootstrap.com/docs/4.3/components/card/
		https://getbootstrap.com/docs/4.3/layout/grid/ -->
		<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/login"><img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/login"><h5 class="card-title" style="text-align:center">Vine</h5></a>
                        <p class="text-muted" align="center">Photographer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><hr class="hr-style"><br>
	
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron2.jpg')}}');">
	<div class="container">
		<h2 align="center">Frequently Ask Question</h2>
	</div>
</div><br>

	<!--https://getbootstrap.com/docs/4.3/components/collapse/-->
<div class="accordion" id="FAQ">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="collapseOne">
						<p style="color: blue">Bagaimana saya dapat menemukan model yang sesuai?<p>
					</button>
				</h2>
			</div>

			<div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#FAQ">
				<div class="card-body">
				Anda harus melakukan login terlebih dahulu agar dapat mencari model berdasarkan jenis kelamin, tinggi badan, dan lokasi.
                Fitur pencarian model akan muncul pada homepage ketika anda login sebagai photographer, makeup artist, atau fashion designer.
                Anda dapat menggunakan fitur ini untuk menemukan model secara cepat dan tepat.
                Selain itu, anda juga dapat melihat halaman profil setiap model yang muncul dari hasil pencarian untuk mencari tau identitas dan fotoportofolio model bersangkutan.
				Apabila anda tertarik, maka anda dapat menekan button recruit.
				Setelah itu, anda tinggal menunggu pesan masuk dari penyelanggara acara tersebut melalui halaman inbox.
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="collapseTwo">
				<p style="color: blue">Bagaimana cara mengajukan kerja sama pekerjaan pada perekrut?</p>
						</button>
					</h2>
			</div>
			<div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
					<div class="card-body">
					Anda harus melakukan login terlebih dahulu agar dapat mengajukan kerja sama pekerjaan pada perekrut.
					Fitur pencarian perekrut akan muncul pada homepage ketika anda login sebagai model.
					Anda dapat menggunakan fitur ini untuk mengajukan kerja sama pekerjaan pada perekrut secara cepat.
					Selain itu, anda juga dapat melihat halaman profil setiap perekrut yang muncul dari hasil pencarian untuk mencari tau identitas dan foto portfolio model bersangkutan.
					Apabila anda tertarik, maka anda dapat menekan button ask for job.
					Setelah itu, anda tinggal menunggu pesan masuk dari perekrut tersebut melalui halaman inbox.
				</div>
			</div>
		</div>
</div><br><br>
	@endsection
		
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>