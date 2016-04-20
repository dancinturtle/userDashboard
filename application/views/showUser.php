<!DOCTYPE html>
<html>
<head>
	<title>Show User</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff'); ?>
	<div class="container">
		<h2>Micahel Choi</h2>
		<div class="row">
			<div class="col-md-2">
				<p>Registered at:</p>
			</div>
			<div class="col-md-4">
				<p>December 23, 2012</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<p>User ID:</p>
			</div>
			<div class="col-md-4">
				<p>#1</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<p>Email address:</p>
			</div>
			<div class="col-md-4">
				<p>michael@village88.com</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<p>Description:</p>
			</div>
			<div class="col-md-4">
				<p>I am happy to be here!</p>
			</div>
		</div>
		<h4>Leave a message for Michael</h4>
		<form role="form" action="#" method="post">
		  <div class="form-group">
		    <input type="textarea" class="form-control" name="message">
		  </div>
		  <div class="row">
		  		<div class="col-md-1 col-md-offset-11">
		  			<button type="submit" class="btn btn-success">Post</button>
		  		</div>
		  </div>
		</form>
		<div class="message">
			<div class="row">
				<div class="col-md-2">
					<p>Mark Guillen wrote</p>
				</div>
				<div class="col-md-2 col-md-offset-8 time">
					<p>7 hours ago</p>
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-12 outline">
					<p>Hi Michael! I'm having so much fun!</p>
				</div>
			</div>
		</div><!--end of message grouping-->
		<div class="comment">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<p><a href="#">Diana Maki</a> wrote</p>
				</div>
				<div class="col-md-2 col-md-offset-5 time">
					<p>23 minutes ago</p>
				</div> 
			</div>
			<div class="row">
				<div class="col-md-11 col-md-offset-1 outline">
					<p>Where are the french fries?</p>
				</div>
			</div>
		</div>
		<br>
		<div class="postcomment">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<form role="form" action="#" method="post">
						<input type="textarea" class="form-control" value="Write a message" name="comments">
							<div class="col-md-1 col-md-offset-11">
								<button type="submit" class="btn btn-success">Post</button>
							</div>
					</form>
				</div>
			</div>
		</div>

	</div> <!--close container -->
</body>
</html>