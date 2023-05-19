<?php  

require "functions.php";


$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		.error-box {
			color: red;
			margin-bottom: 15px;
		}
		body {
    background-color: #f8f9fa;
    background-image: url("login.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .container {
			background-color: rgba(255, 255, 255, 0); /* Set the background color to transparent with an alpha value */
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" >Slogan </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link logout-button" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="error-box">
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<form method="post" class="form">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>

</body>
</html>
