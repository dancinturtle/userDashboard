<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/navbarLogOff'); ?>
<div class="container">
	<h2>All Users</h2>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created at</th>
			<th>User level</th>
		</thead>
		<tr>
			<td>1</td>
			<td><a href="/users/show">Michael Choi</a></td>
			<td>michael@choi.com</td>
			<td>Dec. 23, 1980</td>
			<td>admin</td>
		</tr>
		<tr>
			<td>2</td>
			<td><a href="#">Homer Simpson</a></td>
			<td>donuts@springfield.com</td>
			<td>April 20, 1978</td>
			<td>normal</td>
		</tr>
	</table>

</div>
</body>
</html>