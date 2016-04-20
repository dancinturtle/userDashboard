<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Manage users</h2>
			</div>
			<div class="col-md-2 col-md-offset-6">
				<a class="btn btn-success" href="/users/newuser">Add new</a>
			</div>
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Eamil</th>
				<th>Created at</th>
				<th>User level</th>
				<th>Actions</th>
			</thead>
			<tr>
				<td>1</td>
				<td><a href="#">Michael Choi</a></td>
				<td>michael@village88.com</td>
				<td>Dec. 23, 1909</td>
				<td>Admin</td>
				<td><a href="/users/adminedit">Edit</a></td>
				<td><a href="#">Remove</a></td>
			</tr>
		</table>
	</div>
</body>
</html>