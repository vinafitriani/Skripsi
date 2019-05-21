@extends('app')

@section('title', 'Beranda | Vind Website')
	
<div class="header">
	<p>Language : &nbsp  
	<a href="/index-model-en">English</a>&nbsp &nbsp;
	<a href="/index-model-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

<div class="topnav">
	<a class="active" href="/index-in">Beranda</a>
	<a href="/inbox-in">Pesan masuk</a>
	<a href="/profile-in">Profil</a>
	<a href="/category-in">Kategori</a>
	<a href="/about-in">Tentang</a>
	<a href="/index-in">Keluar</a>
</div>

<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
  	<div class="container">
    	<h1 class="display-4">Recruit any Top Models</h1>
			<p class="lead">from using Vind Website</p>
			<form action="#" method="post">
				<div class="row">                                                                  
					<div class="col-auto" style="width:20%">
						<input type="text" class="form-control" name="location" placeholder="Lokasi">
					</div>
					<div class="col-auto" style="width:20%">
						<div class="wrap-input">
							<select class="custom-select" width="100%">
									<option value="male">Laki-laki</option>
									<option value="female">Perempuan</option>
							</select>								
						</div>	
					</div>	
					<div class="col-auto" style="width:20%">
							<input type="text" class="form-control" name="height" placeholder="Tinggi badan(cm)">
					</div>
					<div class="col-auto" style="width:20%">
						<input type="submit" class="btn btn-primary btn-block" value="Cari">
					</div>
				</div>
			</form>
  	</div>
	</div><br><hr class="hr-style"><br>
	
	<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
  	<div class="container">
	  <h2 style="text-align:center; color:white">Model</h2>
  	</div>
	</div><br>
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model1.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Giselle Olivia</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Anastasia Sinclair</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
				<div class="card-img">
					<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model3.jpg')}}" class="card-img-top" alt="model"></a>
					<div class="card-body">
						<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Natalie Kardashian</h5></a>
					</div>
				</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/model4.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Rachel Schewarzeneger</h5></a>
						</div>
					</div>
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male1.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Ryan</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male2.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Mario</h5></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
				<div class="card-img">
					<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male3.jpg')}}" class="card-img-top" alt="model"></a>
					<div class="card-body">
						<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Patrick</h5></a>
					</div>
				</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 15rem;">
					<div class="card-img">
						<a href="/profile-model-en"><img src="{{ asset('images/portfolio/male4.jpg')}}" class="card-img-top" alt="model"></a>
						<div class="card-body">
							<a href="/profile-model-en"><h5 class="card-title" style="text-align:center">Leonard</h5></a>
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
						<p style="color: blue">Bagaimana saya dapat mencari kandidat model yang tepat?<p>
					</button>
				</h2>
			</div>

			<div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#FAQ">
				<div class="card-body">
				Anda perlu melakukan login terlebih dahulu untuk dapat melakukan pencarian model sesuai kategori jenis kelamin, tinggi badan, dan lokasi.
									Fitur searching ini akan muncul pada homepage apabila anda login sebagai photographer, fashion designer, atau makeup artist. Anda dapat memanfaatkan fitur ini untuk menemukan model dengan tepat dan cepat.
									Selain itu, anda juga dapat melihat halaman profil pada model - model yang muncul dari hasil pencarian agar dapat ditelusuri lebih lanjut mengenai info dan portofolio.
				</div>
			</div>
  		</div>
  		<div class="card">
    		<div class="card-header" id="headingTwo">
      			<h2 class="mb-0">
        			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="collapseTwo">
					<p style="color: blue">Bagaimana saya dapat ikut serta pada acara - acara yang tersedia?</p>
        			</button>
      			</h2>
    		</div>
    		<div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
      			<div class="card-body">
						Anda perlu melakukan login terlebih dahulu untuk dapat melakukan pencarian acara - acara yang diselenggarakan oleh photographer, fashion designer, dan makeup artist.
						Fitur searching ini akan muncul pada homepage apabila anda login sebagai model. Anda dapat memanfaatkan fitur ini untuk menemukan acara yang sesuai dengan yang anda inginkan.
						Ketika menekan salah satu acara yang muncul dari hasil pencarian, muncul halaman yang menampilkan informasi detail mengenai acara tersebut, anda juga dapat mengikuti acara tersebut dengan menekan tombol yang tersedia di halaman yang sama.
						Setelah itu, anda tinggal menunggu info dari pihak penyelenggara acara apakah diterima atau tidak.
				</div>
			</div>
  		</div>
	</div><br><br>
	@endsection
		
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>