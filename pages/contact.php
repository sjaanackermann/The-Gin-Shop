<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || The Gin Shop</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="../css/foundation.css" />

    <script src="js/vendor/modernizr.js"></script>

</head>

<body id="top">

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">
  <img src="../images/logo.png" width="60" height="40" alt="The Gin Shop">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="mx-3 my-2" href="about.php">About</a>
      <a class="mx-3 my-2" href="../products.php">Products</a>
      <a class="mx-3 my-2" href="gallery.php">Gallery</a>
      <a class="mx-3 my-2" href="../cart.php">View Cart</a>
      <a class="mx-3 my-2" href="../orders.php">My Orders</a>
      <a class="mx-3 my-2" href="contact.php">Contact</a>
        <?php

        if (isset($_SESSION['username'])) {
          echo '<a class="mx-3 my-2" href="../account.php">My Account</a>>';
          echo '<a class="mx-3 my-2" href="../logout.php">Log Out</a>';
        } else {
          echo '<a class="mx-3 my-2" href="../login.php">Log In</a>';
          echo '<a class="mx-3 my-2" href="../register.php">Register</a>';
        }
        ?>
    </div>
  </div>
</nav>


    <!-- Google Maps -->
    <div class="contact">
        <h3>Want to get in touch with us?</h3>
    </div>

    <br>


    <div class="container">
        <h4>Feel free to submit your query to us below:</h4>
        <form action="pages/contactAdd.php" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea class="form-control" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-info zoom" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <br>
    <div class="container">
    <h4>Or find our office below to come visit:</h4>
    </div>
    <br>

    <div class="contactMap">
    <p style="text-align: center;"><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4104.25768617099!2d18.445474117783412!3d-33.924002452592696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x1dcc5d9854044ed9%3A0x6a0ebf49da5aabab!2sCodeSpace%2C%206%20Beach%20Rd%2C%20Woodstock%2C%20Cape%20Town%2C%208000!3m2!1d-33.9247137!2d18.4487146!5e0!3m2!1sen!2sza!4v1590164880693!5m2!1sen!2sza" width="320" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
    </div>

    <br>

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