<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}
include 'config/config.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || The Gin Shop</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
                <li class='active'><a href="products.php">Products</a></li>
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




    <div class="row" style="margin-top:10px;">
        <div class="small-12">
            <?php
            $i = 0;
            $product_id = array();
            $product_quantity = array();

            $result = $mysqli->query('SELECT * FROM products');
            if ($result === FALSE) {
                die();
            }

            if ($result) {

                while ($obj = $result->fetch_object()) {

                    echo '<div class="large-4 columns zoomin">';
                    echo '<p><h3>' . $obj->product_name . '</h3></p>';
                    echo '<img id="myImg" src="images/products/' . $obj->product_img_name . ' alt="product""/>';
                    echo '<p><strong>Product Code</strong>: ' . $obj->product_code . '</p>';
                    echo '<p><strong>Description</strong>: ' . $obj->product_desc . '</p>';
                    echo '<p><strong>Units Available</strong>: ' . $obj->qty . '</p>';
                    echo '<p><strong>Price (Per Unit)</strong>: ' . $currency . $obj->price . '</p>';

                    // The Modal 
                    echo '<div id="myModal" class="modal">';

                    // The Close Button
                    echo '<span class="close">&times;</span>';

                    // <!-- Modal Content (The Image) -->
                    echo '<img class="modal-content" id="img">';

                    // <!-- Modal Caption (Image Text) -->
                    echo '<div id="caption"></div>';
                    echo '</div>';


                    if ($obj->qty > 0) {
                        echo '<p><a href="update-cart.php?action=add&id=' . $obj->id . '"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                    } else {
                        echo 'Out Of Stock!';
                    }
                    echo '</div>';

                    $i++;
                }
            }

            $_SESSION['product_id'] = $product_id;


            echo '</div>';
            echo '</div>';
            ?>

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
                            <li> <a href="tos.php"> Terms of Services </a> </li>
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
    <script>
        $(document).foundation();
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>