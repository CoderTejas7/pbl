<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buyer Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url("buyer.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <!-- Your navigation bar code here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="logo.jpg" alt="Logo" style="height: 70px;">
</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome, Buyer!</h1>

        <!-- Search form -->
        <form action="buyer.php" method="GET">
            <div class="form-group">
                <label for="searchInput">Search:</label>
                <input type="text" class="form-control" id="searchInput" name="searchInput"
                       placeholder="Enter an item name">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php
        // Example array of available items (replace with your actual data)
        $availableItems = [
            [
                'name' => 'Vegetables',
                'image' => 'item1.jpg',
                'description' => 'Fresh Vegetables from farm ........',
                'price' => 1099,
            ],
            [
                'name' => 'Onions',
                'image' => 'item2.jpg',
                'description' => '20 kg onions ',
                'price' => 3000,
            ],
            // Add more items as needed
        ];

        // Perform search if search input is provided
        if (isset($_GET['searchInput']) && !empty($_GET['searchInput'])) {
            $searchQuery = $_GET['searchInput'];

            // Loop through the available items and find the matching search results
            $searchResults = array_filter($availableItems, function ($item) use ($searchQuery) {
                return stripos($item['name'], $searchQuery) !== false;
            });

            if (!empty($searchResults)) {
                echo '<h2>Search Results:</h2>';
                echo '<div class="row">';
                foreach ($searchResults as $item) {
                    echo '<div class="col-md-4">';
                    echo '    <div class="card">';
                    echo '        <img src="' . $item['image'] . '" class="card-img-top" alt="Item Image">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . $item['name'] . '</h5>';
                    echo '            <p class="card-text">' . $item['description'] . '</p>';
                    echo '            <p class="card-text">Price: &#8377;' . $item['price'] . '</p>'; // &#8377; is the HTML entity code for the Rupee symbol
                    echo '            <form action="cart.php" method="POST">';
                    echo '                <input type="hidden" name="item_name" value="' . $item['name'] . '">';
                    echo '                <input type="hidden" name="item_price" value="' . $item['price'] . '">';
                    echo '                <button type="submit" class="btn btn-primary">Add to Cart</button>';
                    echo '            </form>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<h2>No Results Found</h2>';
            }
        } else {
            echo '<h2>Available Items</h2>';
            echo '<div class="row">';
            foreach ($availableItems as $item) {
                echo '<div class="col-md-4">';
                echo '    <div class="card">';
                echo '        <img src="' . $item['image'] . '" class="card-img-top" alt="Item Image">';
                echo '        <div class="card-body">';
                echo '            <h5 class="card-title">' . $item['name'] . '</h5>';
                echo '            <p class="card-text">' . $item['description'] . '</p>';
                echo '            <p class="card-text">Price: &#8377;' . $item['price'] . '</p>'; // &#8377; is the HTML entity code for the Rupee symbol
                echo '            <form action="cart.php" method="POST">';
                echo '                <input type="hidden" name="item_name" value="' . $item['name'] . '">';
                echo '                <input type="hidden" name="item_price" value="' . $item['price'] . '">';
                echo '                <button type="submit" class="btn btn-primary">Add to Cart</button>';
                echo '            </form>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
