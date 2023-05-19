<?php
	require "functions.php";
	check_login();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		
  body {
    background-color: #f8f9fa;
    background-image: url("home.jpg");
    background-repeat: no-repeat;
    background-size: cover;
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
		.card-body {
    background-color: transparent !important;
   
}

.card {
    background-color: rgba(255, 255, 255, 0.3) !important;
    border: none;
}


  


	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <!-- Left side buttons -->
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand">Logo Here</a>
            </div>
            <div class="col-md-6">
			<a href="shop.php" class="btn btn-outline-light mr-2">SHOP</a>
    <a href="#" class="btn btn-outline-light">INFORMATION</a>
            </div>
        </div>
        <!-- End of left side buttons -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php if (!check_login(false)): ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Signup</a>
                </li>
                <?php endif; ?>
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
						<h1 class="text-center mb-4">Welcome to My Website</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed mauris quis lorem malesuada pharetra. Suspendisse eu tellus ut quam consectetur varius in eget purus. Fusce suscipit commodo nisl, sit amet placerat est gravida nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						<p>Mauris imperdiet id nulla quis bibendum. Nunc eu augue lectus. Vivamus efficitur, ipsum ac rhoncus euismod, odio elit suscipit quam, id congue risus augue ac lacus. Morbi efficientur magna sed tellus gravida, vel venenatis quam consectetur. Integer pulvinar elit vel risus ultrices commodo. Nulla ac purus auctor, faucibus mi in, auctor tellus. Sed vel mauris nulla. Aliquam eu purus non velit iaculis malesuada id ac mauris. Pellentesque tempor semper odio, eu pretium massa pulvinar eget. Duis vitae dui luctus, ullamcorper felis eu, efficitur nibh. Fusce sed imperdiet sapien. Fusce fringilla diam quis finibus bibendum. Aenean quis efficitur risus, vel malesuada nisi.</p>
				</div>
				</div>
				</div>
				</div>
				</div>
				<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
