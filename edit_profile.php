<?php
	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #f8f9fa;
		}
		.navbar {
			background-color: #007bff;
			color: #fff;
		}
		.nav-link {
			color: #fff;
			font-weight: bold;
		}
		.nav-link:hover {
			color: #fff;
			text-decoration: underline;
		}
		.btn-logout {
			background-color: #dc3545;
			color: #fff;
			font-weight: bold;
			border-radius: 0;
			border: none;
			text-transform: uppercase;
		}
		.btn-logout:hover {
			background-color: #c82333;
			color: #fff;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
				<a class="navbar-brand" href="#">My Website</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-logout" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-body">
						<h1 class="text-center mb-4">Edit Profile</h1>
						<form action="save_profile.php" method="post">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name" required>
							</div>
							<div class="form-group">
								<label for="phone">Phone:</label>
								<input type="text" class="form-control" id="phone" name="phone" required>
							</div>
                            <div class="form-group">
								<label for="address">Address:</label>
								<textarea class="form-control" id="address" name="address" rows="3" required></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block" > <a href="save_profile.php">Save Changes</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

							
