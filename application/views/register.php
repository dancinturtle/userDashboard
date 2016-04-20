<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbar'); ?>
<div class="container">
	<form role="form" action="/registers/check" method="post">
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email">
	  </div>
	  <div class="form-group">
	    <label for="first_name">First name:</label>
	    <input type="text" class="form-control" name="first_name">
	  </div>
	  <div class="form-group">
	    <label for="last_name">Last name:</label>
	    <input type="text" class="form-control" name="last_name">
	  </div>
	  <div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" name="password">
	  </div>
	  <div class="form-group">
	    <label for="conpassword">Password:</label>
	    <input type="password" class="form-control" name="conpassword">
	  </div>
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>
	<hr>
	<p><a href="/signins">Already have an account? Login!</a></p>
</div>

</body>
</html>