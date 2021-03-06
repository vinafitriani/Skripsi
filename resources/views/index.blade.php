@extends('layouts.app')

@section('pageTitle', 'Home')

@section('content')

<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
<div class="container">
    <h1 class="display-4">{{ trans('sentence.homeWord1')}} </h1>
    <p class="lead">{{ trans('sentence.homeWord2')}}</p><br><br><br><br><br><br>
</div>
<p style="color:grey; padding-left:10px; font-size:10px">Source: https://www.alejandrodemiguel.com/wp-content/uploads/slider2018-5.jpg</p>
</div><br>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_panels_contextual&stacked=h-->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">{{ trans('sentence.aboutvind') }}</div>
                        <div class="panel-body" style="text-align:justify">{{ trans('sentence.homeAbout')}}
                            <ul>
                                <li>Model</li>
                                <li>Photographer</li>
                                <li>Fashion Designer</li>
                                <li>Makeup Artist</li>
                            </ul>	
                            <a href="/about" class="btn btn-info" role="button" style="width:100%">{{ trans('sentence.learnmore') }}</a>
                        </div>
                    </div>
                </div>
            </div>			

            <div class="col-md-4">
                <div class="card border-info mb-3" style="max-width: 25rem;">
                    <div class="card-header">{{ trans('sentence.contact') }}</div>
                    <div class="card-body text-info">
                        <h5 class="card-title" style="color:black">Email</h5>
                        <p class="card-text" style="color:green">vindwebsite@gmail.com</p>
                        <h5 class="card-title" style="color:black">Nomor Telepon</h5>
                        <p class="card-text" style="color:green">(022) 7215324</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><hr class="hr-style"><br>

<!--Photo by Johny Goerend on Unsplash-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron1.jpg')}}');">
<div class="container">
    <h2 align="center">{{ trans('sentence.recruiter') }}</h2>
</div>
</div><br>

<!-- https://getbootstrap.com/docs/4.3/components/card/
    https://getbootstrap.com/docs/4.3/layout/grid/ -->   
    <div class="container">
        <div class="row">
            @foreach ($recruiters as $user)
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <div class="card-img">
                        <a href="/login">
                            @if($user->profile_pict==true)
                                <img src="{{ asset ($user->profile_pict)}}" class="card-img-top" alt="recruiter">
                            @else
                                <img src="{{ asset ('images/user.png')}}" class="card-img-top" alt="recruiter">
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="/login"><h5 class="card-title" style="text-align:center">{{ $user->fullname }}</h5></a>
                            <p class="text-muted" align="center">{{ $user->category }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach	
        </div>
    </div><br><hr class="hr-style"><br>

<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
<div class="container">
    <h2 style="text-align:center; color:white">{{ trans('sentence.model') }}</h2>
</div>
</div><br>

<div class="container">
    <div class="row">
        @foreach ($models as $user)
        <div class="col-md-3">          
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/login">
                        @if($user->profile_pict==true)
                            <img src="{{ asset ($user->profile_pict)}}" class="card-img-top" alt="recruiter">
                        @else
                            <img src="{{ asset ('images/user.png')}}" class="card-img-top" alt="recruiter">
                        @endif
                    </a>
                    <div class="card-body">
                        <a href="/login"><h5 class="card-title" style="text-align:center">{{$user->fullname}}</h5></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
                Selain itu, anda juga dapat melihat halaman profil setiap model yang muncul dari hasil pencarian untuk mencari tau identitas dan foto portofolio model bersangkutan.
                Apabila anda tertarik, maka anda dapat menghubungi user melalui alamat email.
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
					Apabila anda tertarik, maka anda dapat menghubungi user melalui alamat email.
				</div>
			</div>
		</div>
</div><br><br>
@endsection

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>