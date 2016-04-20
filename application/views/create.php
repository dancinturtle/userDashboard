<!DOCTYPE html>
<html>
<head>
	<title>Create a New User</title>
	<?php $this->load->view('partials/header');?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff');?>
	<div class="container">
		<h2>Add a new user</h2>
		<form role="form" action="/signins/admin" method="post">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Sign in</button>
		</form>
		
	</div>
</body>
</html>