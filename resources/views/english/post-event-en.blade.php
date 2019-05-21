@extends('app')

@section('title', 'Post Event | Vind Website')

<div class="header">
	<p>Language : &nbsp  
	<a href="/post-event-en">English</a>&nbsp &nbsp;
	<a href="/post-event-in">Bahasa</a>&nbsp &nbsp; </p>
</div>

@section('content')

	<div class="topnav">
		<a href="/index-en">Home</a>
		<a href="/inbox-en">Inbox</a>
		<a href="/profile-en">Profile</a>
		<a href="/category-en">Category</a>
		<a href="/about-en">About</a>
		<a href="/index-en">Sign out</a>
	</div><br><br>

	<h1 style="color:#8397b3; text-align:center">Post Event</h1>
	<div class="container">
		<div class="shadow p-4 mb-4 bg-white">
			<form action="/action_page.php">
				<div class="form-group">
					<label for="subject">Subject:</label>
					<input type="text" class="form-control" id="subject" placeholder="subject event" name="subject">
				</div>
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="agency/company/your name" name="name">
				</div>
				<div class="form-group">
					<label for="date_event">Date:</label>
					<input type="date" class="form-control" id="date_event" placeholder="pick the date" name="date_event">
				</div>
				<div class="form-group">
					<label for="location_event">Location:</label>
					<input type="text" class="form-control" id="location_event" placeholder="location that event will be held" name="location_event">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
				</div>
				<div class="form-group">
					<label for="pict_event">Event picture:</label>&nbsp
					<form action="/action_page.php">
						<input type="file" name="pic" accept="image/*">
					</form>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
			</form>
		</div>
	</div><br><br>
	@endsection						
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>