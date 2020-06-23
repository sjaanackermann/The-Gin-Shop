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
  <title>The Gin Shop</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Foundation CSS -->
  <link rel="stylesheet" href="css/foundation.css" />

  <script src="js/vendor/modernizr.js"></script>
  <script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>

</head>

<body id="top">

  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="index.php">The Gin Shop</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="pages/about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">View Cart</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
        <?php

        if (isset($_SESSION['username'])) {
          echo '<li><a href="account.php">My Account</a></li>';
          echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
          echo '<li><a href="login.php">Log In</a></li>';
          echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
      </ul>
    </section>
  </nav>

  <!-- HERO IMAGE -->
  <img data-interchange="[images/landscape.jpg, (retina)], [images/landscape.jpg, (large)], [images/mobile.jpg, (mobile)], [images/landscape.jpg, (medium)]">
  <noscript><img src="images/landscape.jpg" alt="Hero Image"></noscript>

  <!-- CONTENT OF INDEX PAGE STARTS -->

  <!-- FEATURED PRODUCTS -->
  <div class="jumbotron text-center">
    <img src="images/logo.png" alt="logo">
    <hr>
    <h1 class="display-4">Featured Products</h1>
  </div>
  <!-- Images used to open the lightbox -->
  <div class="row">
    <div class="column">
      <img src="images/products/gin1.jpg" alt="gin1" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="images/products/gin2.jpg" alt="gin2" onclick="openModal();currentSlide(2)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="images/products/gin3.jpg" alt="gin3" onclick="openModal();currentSlide(3)" class="hover-shadow">
    </div>
  </div>

  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="images/products/gin1.jpg" style="width:100%" alt="gin1">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="images/products/gin2.jpg" style="width:100%" alt="gin2">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="images/products/gin3.jpg" style="width:100%" alt="gin3">
      </div>

      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>



  <!-- UPCOMING COLLECTION -->
  <div class="jumbotron text-center">
    <h1 class="display-4">Products Coming Soon!</h1>
  </div>

  <!-- Images used to open the lightbox -->
  <div class="row">
    <div class="column">
      <img src="images/products/gin4.jpg" class="hover-shadow" alt="gin4">
    </div>
    <div class="column">
      <img src="images/products/gin5.jpg" class="hover-shadow" alt="gin5">
    </div>
    <div class="column">
      <img src="images/products/gin6.jpg" class="hover-shadow" alt="gin6">
    </div>
  </div>
  </div>
  </div>




  <!-- CONTENT OF INDEX PAGE ENDS -->

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


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<script>
  $(document).foundation();
</script>

</body>

</html>