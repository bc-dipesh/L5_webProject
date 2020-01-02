<?php
// IMPORT HEADER
require './assets/include/header.php';
?>
<div class="signup-container">
    <?php
    // IMPORT NAV 
    require './assets/include/nav.php';
    ?>

    <!-- SIGNUP STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <img src="./images/hero.jpg" class="img wow fadeInUp" alt="" />
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        Signup
                    </h3>
                    <?php
                    // Check for any message from the header
                    if (isset($_GET['error'])) {
                        // Display error message
                        if ($_GET['error'] === "invalidemail") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Invlaid email</p>';
                        } else if ($_GET['error'] === "invalidmail&uid") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Invalid username and email</p>';
                        } else if ($_GET['error'] === "invalidusername") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Invalid username</p>';
                        } else if ($_GET['error'] === "passwordmismatch") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Password did not match</p>';
                        } else if ($_GET['error'] === "usernameoremailexists") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Username or email already exists</p>';
                        }
                    } else if (isset($_GET['signup'])) {
                            if ($_GET['signup'] === "success") {
                            echo '<p class="wow fadeInUp" data-wow-delay="0.4s">Signedup Successfully</p>';
                        }
                    }?>
                    <form class="signupform" action="./assets/include/signup.inc.php" method="post">
                        <label for="uid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username..." name="uid" required>

                        <label for="mail" class="wow fadeInUp" data-wow-delay="0.6s"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail..." name="mail" required>

                        <label for="psw" class="wow fadeInUp" data-wow-delay="0.7s"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password..." name="psw" required>

                        <label for="psw-confirm" class="wow fadeInUp" data-wow-delay="0.8s"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Confirm Password..." name="psw-confirm" required>

                        <button type="submit" name="signup-submit">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SIGNUP ENDS HERE -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.php';
