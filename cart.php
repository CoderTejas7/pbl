<?php
session_start();

// Check if the cart array exists in the session, if not, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['item_name']) && isset($_POST['item_price'])) {
        $itemName = $_POST['item_name'];
        $itemPrice = $_POST['item_price'];

        // Add item to the cart array
        $_SESSION['cart'][] = [
            'name' => $itemName,
            'price' => $itemPrice
        ];
    }
}

// Remove item from cart if delete button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_item'])) {
    $index = $_POST['delete_item'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reset array keys
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>

    <!-- Your navigation bar code here -->

    <div class="container">
        <h1>Cart</h1>

        <?php
        // Display cart items and total
        if (!empty($_SESSION['cart'])) {
            echo '<table class="table">';
            echo '    <thead>';
            echo '        <tr>';
            echo '            <th>Item</th>';
            echo '            <th>Price</th>';
            echo '            <th>Owner Address</th>';
            echo '            <th>Owner Mobile</th>';
            echo '            <th>Action</th>';
            echo '        </tr>';
            echo '    </thead>';
            echo '    <tbody>';
            
            $total = 0;
            foreach ($_SESSION['cart'] as $index => $item) {
                echo '    <tr>';
                echo '        <td>' . $item['name'] . '</td>';
                echo '        <td> &#8377;' . $item['price'] . '</td>';
                echo '        <td>Owner Address</td>'; // Replace with actual owner address
                echo '        <td>Owner Mobile</td>'; // Replace with actual owner mobile
                echo '        <td>';
                echo '            <form method="post" action="">';
                echo '                <input type="hidden" name="delete_item" value="' . $index . '">';
                echo '                <button type="submit" class="btn btn-danger">Delete</button>';
                echo '            </form>';
                echo '        </td>';
                echo '    </tr>';
                
                $total += $item['price'];
            }
            
            echo '    </tbody>';
            echo '</table>';
            
            echo '<h3>Total:&#8377; ' . $total . '</h3>';
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>

        <!-- Link to continue shopping -->
        <a href="buyer.php" class="btn btn-primary">Continue Shopping</a>

        <!-- Link to payment page -->
        <a href="payment.php" class="btn btn-success">Proceed to Payment</a>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
