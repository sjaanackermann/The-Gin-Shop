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
    <title>About || The Gin Shop</title>

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
  <a class="navbar-brand" href="../index.php">The Gin Shop</a>
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
   

    <!-- HERO IMAGE -->
    <!-- <img data-interchange="[images/landscape.jpg, (retina)], [images/landscape.jpg, (large)], [images/mobile.jpg, (mobile)], [images/landscape.jpg, (medium)]">
    <noscript><img src="images/landscape.jpg" alt="Hero Image"></noscript> -->

    <div class="jumbotron text-center">
        <img src="../images/logo.png" alt="logo">
        <hr>
        <h1 class="display-4">Why The Gin Shop?</h1>
        <p class="lead"><h4>The Gin Shop aims to provide the best possible experience when it comes to online Gin shopping.</h4></p>
        <p><h5>We try to provide only the best Gin at the best possible prices, delivered straight to your door.</h5></p>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="small-12">

            <br>
            <div class="Ateam">
                <h1>Meet the TEAM:</h1>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card mx-auto mt-4" style="width: 18rem;">
                                <img src="../images/2.jpg" class="card-img-top" alt="Nate Wilson">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Nate Wilson</b></h5>
                                    <p class="card-text">Nate has alwyas had a passion for Gin. With the ever growing online markets growing. He finally decided to open his own online store. And so The Gin Shop was started.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="col-sm-6">
                            <div class="card mx-auto mt-4" style="width: 18rem;">
                                <img src="../images/3.jpg" class="card-img-top" alt="Cindy Kenwood">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Cindy Kenwood</b></h5>
                                    <p class="card-text">Cindy is the Head of Marketing for The Gin Shop. She has really helped to bring the shop to the next level, making The Gin Shop well known competition in the industry. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card mx-auto mt-4" style="width: 18rem;">
                                <img src="../images/4.jpg" class="card-img-top" alt="Julia Ferdinand">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Julia Ferdinand</b></h5>
                                    <p class="card-text">Julia is the Customer Service Liason. She ensures that every single client has a fantastic experience with The Gin Shop. She lives to assist.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="col-sm-6">
                            <div class="card mx-auto mt-4" style="width: 18rem;">
                                <img src="../images/1.jpg" class="card-img-top" alt="Roger Moore">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Roger Moore</b></h5>
                                    <p class="card-text">Roger is our Secret Agent. Some people may even call him Bond, James Bond. He is just here as a Gin tester. <br> Shaken and Stirred.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

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