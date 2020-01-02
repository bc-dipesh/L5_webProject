<?php
// IMPORT HEADER
require './assets/include/header.php';
?>
<div class="login-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.php';
    ?>

    <!-- LOGIN STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <img src="images/hero.jpg" class="img wow fadeInUp" alt="" />
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <?php if (!isset($_SESSION['userId'])) { ?>
                        <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                            Login
                        </h3>
                        <form class="loginform" action="./assets/include/login.inc.php" method="post">
                            <label for="mailuid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
                            <input type="text" placeholder="Enter E-mail/Username..." name="mailuid">

                            <label for="psw" class="wow fadeInUp" data-wow-delay="0.6s"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password..." name="psw">
                            <button type="submit" name="login-submit">Login</button>
                            <a href="signup.php" class="header-signup">Signup</a>
                        <?php } else {
                        // Display logout button if user has logged in
                        ?>
                            <form action="./assets/include/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit">Logout</button>
                            </form>
                        <?php } ?>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN ENDS HERE -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.php';
