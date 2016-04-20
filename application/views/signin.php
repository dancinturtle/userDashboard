<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbar'); ?>
	<div class="container">
		<h2>Sign in</h2>
		<hr>
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
		<hr>
		<p><a href="/registers/index">Don't have an account? Register now!</a></p>


	</div>
</body>
</html>