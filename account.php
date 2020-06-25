<?php


if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if ($_SESSION["type"] === "admin") {
  header("location:admin/admin.php");
}

include 'config/config.php';

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Account || The Gin Shop</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Foundation CSS -->
  <link rel="stylesheet" href="css/foundation.css" />

  <script src="js/vendor/modernizr.js"></script>
</head>

<body id="top">

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">
  <img src="images/logo.png" width="60" height="40" alt="The Gin Shop">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="mx-3 my-2" href="pages/about.php">About</a>
      <a class="mx-3 my-2" href="products.php">Products</a>
      <a class="mx-3 my-2" href="pages/gallery.php">Gallery</a>
      <a class="mx-3 my-2" href="cart.php">View Cart</a>
      <a class="mx-3 my-2" href="orders.php">My Orders</a>
      <a class="mx-3 my-2" href="pages/contact.php">Contact</a>
        <?php

        if (isset($_SESSION['username'])) {
          echo '<a class="mx-3 my-2" href="account.php">My Account</a>>';
          echo '<a class="mx-3 my-2" href="logout.php">Log Out</a>';
        } else {
          echo '<a class="mx-3 my-2" href="login.php">Log In</a>';
          echo '<a class="mx-3 my-2" href="register.php">Register</a>';
        }
        ?>
    </div>
  </div>
</nav>

  <!-- HERO IMAGE -->
  <img data-interchange="[images/landscape.jpg, (retina)], [images/landscape.jpg, (large)], [images/mobile.jpg, (mobile)], [images/landscape.jpg, (medium)]">
  <noscript><img src="images/landscape.jpg" alt="Hero Image"></noscript>



  <div class="row" style="margin-top:30px;">
    <div class="small-12">
      <p><?php echo '<h3>Hi ' . $_SESSION['fname'] . '</h3>'; ?></p>

      <p>
        <h4>Account Details</h4>
      </p>

      <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
    </div>
  </div>


  <form method="POST" action="update.php" style="margin-top:30px;">
    <div class="row">
      <div class="small-12">

        <div class="row">
          <div class="small-3 columns">
            <label for="right-label" class="right inline">First Name</label>
          </div>
          <div class="small-8 columns end">
            <?php

            $result = $mysqli->query('SELECT * FROM users WHERE id=' . $_SESSION['id']);

            if ($result === FALSE) {
              die();
            }

            if ($result) {
              $obj = $result->fetch_object();
              echo '<input type="text" id="right-label" placeholder="' . $obj->fname . '" name="fname">';

              echo '</div>';
              echo '</div>';

              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">Last Name</label>';
              echo '</div>';
              echo '<div class="small-8 columns end">';

              echo '<input type="text" id="right-label" placeholder="' . $obj->lname . '" name="lname">';

              echo '</div>';
              echo '</div>';

              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">Address</label>';
              echo '</div>';
              echo '<div class="small-8 columns end">';
              echo '<input type="text" id="right-label" placeholder="' . $obj->address . '" name="address">';



              echo '</div>';
              echo '</div>';

              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">City</label>';
              echo '</div>';
              echo '<div class="small-8 columns end">';
              echo '<input type="text" id="right-label" placeholder="' . $obj->city . '" name="city">';
              echo '</div>';
              echo '</div>';

              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">Area Code</label>';
              echo '</div>';
              echo '<div class="small-8 columns end">';

              echo '<input type="text" id="right-label" placeholder="' . $obj->pin . '" name="pin">';

              echo '</div>';
              echo '</div>';

              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">Email</label>';
              echo '</div>';

              echo '<div class="small-8 columns end">';


              echo '<input type="email" id="right-label" placeholder="' . $obj->email . '" name="email">';

              echo '</div>';
              echo '</div>';
            }



            echo '<div class="row">';
            echo '<div class="small-3 columns">';
            echo '<label for="right-label" class="right inline">Password</label>';
            echo '</div>';
            echo '<div class="small-8 columns end">';
            echo '<input type="password" id="right-label" name="pwd">';

            echo '</div>';
            echo '</div>';
            ?>

            <div class="row">
              <div class="small-4 columns">

              </div>
              <div class="small-8 columns">
                <input class="zoom" type="submit" id="right-label" value="Update" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                <input class="zoom" type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              </div>
            </div>
          </div>
        </div>
  </form>


  <div class="back-to-top-wrapper">
    <a href="#top" class="back-to-top-link" aria-label="Scroll to Top">🔝</a>
  </div>

  <footer>
    <div class="footer" id="footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> About </h3>
            <ul>
              <li> <a href="pages/about.php"> Our Company </a> </li>
              <li> <a href="pages/about.php"> Our Team </a> </li>
              <li> <a href="pages/tos.php"> Terms of Services </a> </li>
            </ul>
          </div>

          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> Other </h3>
            <ul>
              <li> <a href="pages/contact.php"> Contact Us </a> </li>
              <li> <a href="#"> Delivery </a> </li>
              <li> <a href="faq.php"> FAQ </a> </li>
            </ul>

          </div>
          <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
            <h3> Subscribe with Us </h3>
            <ul>
              <li>
                <div class="input-append subscribe-btn text-center">
                  <input type="text" class="full text-center" placeholder="Email ">
                  <button class="btn  btn-info" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
                </div>
              </li>
            </ul>

            <ul class="social">
              <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
              <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
              <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
              <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
            </ul>
          </div>
          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> We Accept: </h3>
            <ul>
              <li class="payments"><i class="fa fa-cc-paypal"></i> PayPal</li>
              <li class="payments"><i class="fa fa-cc-mastercard"></i> Master Card</li>
              <li class="payments"><i class="fa fa-cc-visa"></i> Visa</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="containers">
        <p> The Gin Shop © 2020. All rights reserved. </p>
      </div>
    </div>
    </div>
    </div>

  </footer>






    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>