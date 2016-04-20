<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Dashboard</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<div class="container">
<?php $this->load->view('partials/navbar'); ?>
	<div class="hero-unit">
		<h1>Welcome to the test</h1>
		<p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!
		<br>
		<a href="/signins/index" class="btn btn-primary btn-large">Start</a>
		</p>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h4>Manage users</h4>
			<p>Using this application, you'll learn how to add, remove, and edit user for the application.</p>
		</div>
		<div class="col-md-4">
			<h4>Leave messages</h4>
			<p>Users will be able to leave a message to another user using this application.</p>
		</div>
		<div class="col-md-4">
			<h4>Edit user information</h4>
			<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
		</div>
	</div>
</div>
</body>
</html>