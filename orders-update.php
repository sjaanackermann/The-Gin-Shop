<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

include 'config/config.php';

if (isset($_SESSION['cart'])) {

  $total = 0;

  // Selecting the products from the database with product id

  foreach ($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = " . $product_id);

    if ($result) {

      if ($obj = $result->fetch_object()) {

        // Calculating the cost of all procts in cart
        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];
        // Inserting products into orders for logged in user
        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");
        // Updating the quantity of products left after products added to orders
        if ($query) {
          $newqty = $obj->qty - $quantity;
          if ($mysqli->query("UPDATE products SET qty = " . $newqty . " WHERE id = " . $product_id)) {
          }
        }
      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");
