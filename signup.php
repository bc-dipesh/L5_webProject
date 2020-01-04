<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="signup-container">
    <?php
    // IMPORT NECESSARY FILES
    require './assets/include/nav.inc.php';
    require './assets/include/variables.inc.php';
    require './assets/include/functions.inc.php';
    ?>

    <!-- SIGNUP STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <img src="./images/hero.jpg" class="img wow fadeInUp" alt="hero image" />
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        <!-- DISPLAY INFORMATION ON SCREEN ACCORDING TO DATA -->
                        <?php if (!empty($msg)) {
                            
                            switch ($msg) {
                                case "invalidEmail":
                                    echo "$errorIcon Please provide a valid E-mail";
                                    displaySignupForm();
                                    break;
                                case "invalidEmail&uid":
                                    echo "$errorIcon Please provide a valid E-mail and Username";
                                    displaySignupForm();
                                    break;
                                case "invalidUsername":
                                    echo "$errorIcon Please provide a valid username";
                                    displaySignupForm();
                                    break;
                                case "passwordMismatch":
                                    echo "$errorIcon The password you entered did not match. Please try again";
                                    displaySignupForm();
                                    break;
                                case "usernameOrEmailAlreadyexists":
                                    echo "$errorIcon Username or E-mail already taken. Please try again";
                                    displaySignupForm();
                                    break;
                                case "sqlError":
                                    echo "$errorIcon Unknown error please login again";
                                    displayLoginForm();
                                    break;
                            }
                        } else if (empty($msg)) {
                            displaySignupForm();
                        }
                        ?>
                    </h3>

                </div>
            </div>
        </div>
    </div>

    <!-- SIGNUP ENDS HERE -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
