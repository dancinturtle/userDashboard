<!DOCTYPE html>
<html>
<head>
	<title>Create a New User</title>
	<?php $this->load->view('partials/header');?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff');?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Add a new user</h2>
			</div>
			<div class="col-md-3 col-md-offset-5 time">
				<a class="btn btn-success" href="#">Return to Dashboard</a>
			</div>
		</div>
		<form role="form" action="/signins/admin" method="post">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="first_name">First name:</label>
				<input type="text" name="first_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="last_name">Last name:</label>
				<input type="text" name="last_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="conpassword">Password Confirmation:</label>
				<input type="password" name="conpassword" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Create</button>
		</form>
		
	</div>
</body>
</html>