<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
          body {
    background-color: #f8f9fa;
    background-image: url("shop.jpg");
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
        .sidebar {
            background-color: #007bff;
            color: #fff;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            padding: 20px;
        }
        .sidebar h3 {
            margin-top: 0;
        }
        .sidebar a {
            display: block;
            color: #fff;
            margin-bottom: 10px;
            font-weight: bold;
            text-decoration: none;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        
        /* Custom CSS for Buyer and Seller buttons */
        .btn-buyer {
            background-color: #007bff;
            color: #fff;
            font-size: 3em;
            width:700px;
            padding: 1em;
            border: 3px solid #007bff;
            border-radius: 10px;
            margin-top: 2em;
            transition: all 0.3s ease;
        }
        .btn-buyer:hover {
            background-color: #fff;
            color: #007bff;
        }
        
        .btn-seller {
            background-color: #6c757d;
            color: #fff;
            font-size: 3em;
            padding: 1em;
            width:700px;
            border: 3px solid #6c757d;
            border-radius: 10px;
            margin-top: 2em;
            transition: all 0.3s ease;
        }
        .btn-seller:hover {
            background-color: #fff;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
    <img src="logo.jpg" alt="Logo" style="height: 70px;">
</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                   
                <li class="nav-item">
                    <form action="logout.php" method="post">
                        <button type="submit" name="logout" class="btn btn-logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <h3>Dashboard</h3>
            <a href="profile.php">Profile</a>
            <a href="cart.php">Orders</a>
           
            <a href="message.php">Messages</a>
           
        </div>
        <div class="col-md-10 content">
            <h1>Welcome to the Shop</h1>
            <p>Are you a buyer or a seller?</p>
            <a href="buyer.php" class="btn btn-buyer">Buyer</a>
            <a href="#" class="btn btn-seller">Seller</a>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>