<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('pageTitle') :: {{ config('app.name') }}</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">	
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
	<link rel="stylesheet" href="{{ asset ('js/bootstrap.min.js')}}">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="header">
	<p>Language : &nbsp  
	<a href="{{ url('locale/en') }}">English</a>&nbsp &nbsp;
	<a href="{{ url('locale/id') }}">Bahasa</a>&nbsp &nbsp; </p>
</div>

<!-- https://getbootstrap.com/docs/4.3/layout/grid/ -->
<div class="container">
  <div class="row justify-content-md-center">
		<div class="col-md-auto">
			<header class="home-container">	
				<h1><b>Vind</b></h1>
				<h6>Expand your Job as models | Recruit Top Models for Help your Careers.</h6>		
			</header>
		</div>
	</div>
</div>

@guest
<div class="topnav">
	<a class="@if ( Route::current()->getName() == 'home' )active @endif" href="{{ route('index') }}">{{ trans('sentence.home') }}</a>
	<a class="@if ( Route::current()->getName() == 'category' )active @endif" href="{{ route('category') }}">{{ trans('sentence.category') }}</a>
	<a class="@if ( Route::current()->getName() == 'about' )active @endif" href="{{ route('about') }}">{{ trans('sentence.about') }}</a>
	<a class="@if ( Route::current()->getName() == 'login' )active @endif" href="{{ route('login') }}">{{ trans('sentence.login') }}</a>
	<a class="@if ( Route::current()->getName() == 'register' )active @endif" href="{{ route('register') }}">{{ trans('sentence.register') }}</a>
</div>
@endguest

@auth
@if (Auth::user()->category == "model")
<div class="topnav">
	<a class="@if ( Route::current()->getName() == 'index-model' )active @endif" href="{{ route('index-model') }}">{{ trans('sentence.home') }}</a>
	<a class="@if ( Route::current()->getName() == 'profile-model' )active @endif" href="/profile-model/{{Auth::user()->id	}}">{{ trans('sentence.profile') }}</a>
	<a class="@if ( Route::current()->getName() == 'category' )active @endif" href="{{ route('category') }}">{{ trans('sentence.category') }}</a>
	<a class="@if ( Route::current()->getName() == 'about' )active @endif" href="{{ route('about') }}">{{ trans('sentence.about') }}</a>
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('sentence.logout') }}</a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
	</form>
</div>
@else
<div class="topnav">
	<a class="@if ( Route::current()->getName() == 'index-plk' )active @endif" href="{{ route('index-plk') }}">{{ trans('sentence.home') }}</a>
	<a class="@if ( Route::current()->getName() == 'profile-plk' )active @endif" href=" /profile-plk/{{Auth::user()->id}}">{{ trans('sentence.profile') }}</a>
	<a class="@if ( Route::current()->getName() == 'category' )active @endif" href="{{ route('category') }}">{{ trans('sentence.category') }}</a>
	<a class="@if ( Route::current()->getName() == 'about' )active @endif" href="{{ route('about') }}">{{ trans('sentence.about') }}</a>
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('sentence.logout') }}</a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
	</form>
</div>
@endif
@endauth
	
@yield('content')
<!-- https://mdbootstrap.com/docs/jquery/navigation/footer/ -->
</body>
</html>