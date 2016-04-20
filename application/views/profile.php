<!DOCTYPE html>
<html>
<head>
	<title>Edit your profile</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff'); ?>
<div class="container">
	<h2>Edit profile</h2>
	<div class="row">
		<div class="col-md-6 outline">
			<h4>Edit information</h4>
			<form role="form" action="#" method="post">
	  			<div class="form-group">
					<label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" value="donuts@springfield.com" >
				</div>
				<div class="form-group">
				    <label for="first_name">First Name:</label>
				    <input type="text" class="form-control" name="first_name" value="Homer">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name:</label>
				    <input type="text" class="form-control" name="last_name" value="Simpson">
				</div>
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
		<div class="col-md-5 col-md-offset-1 outline">
			<h4>Change password</h4>
			<form role="form" action="#" method="post">
	  			<div class="form-group">
					<label for="password">Password:</label>
				    <input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label for="conpassword">Password Confirmation:</label>
				    <input type="password" class="form-control" name="conpassword">
				</div>
				<button type="submit" class="btn btn-default">Update password</button>
			</form>
		</div>
	</div>
	<br>
	<div class="row outline">
		<h4>Edit Description</h4>
		<form role="form" action="#" method="post">
	  			<div class="form-group">
				    <input type="textarea" class="form-control" name="description" value="Whatever text">
				</div>
				<button type="submit" class="btn btn-default">Save</button>
			</form>
	</div>
</div>
</body>
</html>