@extends('layouts.app')

@section('pageTitle', 'Home')

@section('content')

<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
<div class="container">
    <h1 class="display-4">Find your Job </h1>
        <p class="lead">and Become a Top Model</p>
</div>
</div><br>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_panels_contextual&stacked=h-->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">{{ trans('sentence.aboutvind') }}</div>
                        <div class="panel-body" style="text-align:justify">Vind merupakan website job searching untuk model peraga busana, serta membantu photographer, fashion designer, dan makeup artist dalam menemukan model yang sesuai dengan kategori yang diinginkan berdasarkan lokasi, jenis kelamin, dan tinggi badan.
                        Anda dapat mencari model yang diinginkan melalui fitur searching pada homepage setelah melakukan login.
                        Selain itu, Vind menyediakan tampilan profil untuk setiap user dimana terdapat foto-foto portofolio yang dapat digunakan sebagai bahan pertimbangan dalam proses perekrutan seorang model.
                        Vind membantu mempermudah pekerjaan bagi seseorang yang memiliki profesi sebagai berikut :
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
                        <p class="card-text" style="color:green">vinanurfitriani@gmail.com</p>
                        <h5 class="card-title" style="color:black">Nomor Telepon</h5>
                        <p class="card-text" style="color:green">081320910304</p>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="col-md-3">
            @foreach ($recruiters as $user)
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
                        <p class="text-muted" align="center">{{$user->category}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div><br><hr class="hr-style"><br>

<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
<div class="container">
    <h2 style="text-align:center; color:white">The Models</h2>
</div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-md-3">
        @foreach ($models as $user)          
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
        @endforeach
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