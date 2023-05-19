<?php  
require "functions.php";
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $errors = signup($_POST);
  if (count($errors) == 0) {
    header("Location: verify.php");
    die;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
     body {
    background-color: #f8f9fa;
    background-image: url("signup.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  
			.navbar{
        background-color: rgba(255, 255, 255, 0.3);
      }
      .card {
        background-color: rgba(255, 255, 255, 0.3); /* Set the background color to transparent with an alpha value */
		
        margin-top: 50px;
        margin-bottom: 50px;
        width: 400px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border: none;
        border-radius: 5px;
      }
      .card-header {
        background-color: rgba(255, 255, 255, 0.3);
       
        color: #fff;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        border-bottom: none;
        border-radius: 5px 5px 0px 0px;
        padding-top: 20px;
        padding-bottom: 20px;
      }
      .card-body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
      .form-group label {
        font-weight: bold;
        font-size: 16px;
      }
      .form-control {
        border-radius: 0px;
        box-shadow: none;
        border-color: #dcdcdc;
      }
      .form-control:focus {
        border-color: #1abc9c;
        box-shadow: none;
      }
      .btn-primary {
        background-color: #4878fa;
        border: none;
        border-radius: 5px;
        width: 100%;
      }
      .btn-primary:hover {
        background-color: #0636bd;
      }
      .alert {
        border-radius: 0px;
      }
      .mt-5 {
        margin-top: 50px;
      }
	  .nav-link{
		background-color:#73a9f0;
		padding: 10px;
	
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: background-color 0.3s ease-in-out;
	  }
	  .nav-link:hover{
		background-color:#0252ba;
	  }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" >Farming Reinvented</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        
          </li>
        </ul>
		</div>
    </nav>

    <div class="container mt-5">
      <h1 class="text-center mb-5">Signup</h1>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <?php if (count($errors) > 0): ?>
            <div class="alert alert-danger">
              <?php foreach ($errors as $error): ?>
                <p class="error"><?= $error ?></p>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <form method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label for="password2">Retype Password</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype your password">
            </div>
			<button type="submit" class="btn btn-primary mt-3">Signup</button>
          <div class="text-center mt-3">
            Already have an account? <a href="login.php">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
  J6qa4849blEChaL0IvCV9Ur+/m+CWvPenYyJb6a5jcPJuZw/woX+945KXpwUbLr+
  " crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-
  core.min.js" integrity="sha384-
  Iv1b3q08BSoKya87Q2KjMDfydOoCwMYf22fhb/PY1r0fLMhT/
  eKjmbO16kJUrsz" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-
  JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

