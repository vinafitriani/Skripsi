@extends('app')

@section('title', 'Signin | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/signin-en">English</a>&nbsp &nbsp;
	<a href="/signin-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')
<div class="topnav">
  <a href="/index-en">Home</a>
  <a href="/profile-en">Profile</a>
  <a href="/category-en">Category</a>
  <a href="/about-en">About</a>
  <a class="active" href="/signin-en">Sign in</a>
  <a href="/signup-en">Sign up</a>
</div><br>

<h1 style="text-align:center; color:#8397b3">Signin Page</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form action="/action_page.php" class="needs-validation" style="float:center" novalidate>
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">Sign in</button>
    </form>
  </div>
</div><br><br>
@endsection