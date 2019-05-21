@extends('app')

@section('title', 'Masuk | Vind Website')
	
<div class="header">
	<p>Language : &nbsp  
	<a href="/index-model-en">English</a>&nbsp &nbsp;
	<a href="/index-model-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

<div class="topnav">
  <a href="/index-in">Beranda</a>
  <a href="/profile-in">Profil</a>
  <a href="/category-in">Kategori</a>
  <a href="/about-in">Tentang</a>
  <a class="active" href="/signin-in">Masuk</a>
  <a href="/signup-in">Daftar</a>
</div><br>

<h1 style="text-align:center; color:#8397b3">Halaman Masuk Akun</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form action="/action_page.php" class="needs-validation" style="float:center" novalidate>
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Masukkan username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Mohon diisi.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Mohon diisi.</div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">Masuk</button>
    </form>
  </div>
</div><br><br>
@endsection