<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/config.php';

$product_id = $_GET['id'];
$action = $_GET['action'];

// Checking if cart is empty
if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM products WHERE id = ".$product_id);

// Switch statement for adding and removing products from the cart
if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {
// Add
      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->qty)
        $_SESSION['cart'][$product_id]++;
      break;
// Remove
      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;



    }
  }
}



header("location:cart.php");

?>
