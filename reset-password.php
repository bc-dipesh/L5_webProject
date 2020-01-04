<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="reset-password-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.inc.php';
    ?>

    <!-- RESET PASSWORD STARTS HERE -->
    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <img src="images/hero.jpg" class="img wow fadeInUp" alt="" />
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        <?php
                        // GIVE MESSAGE
                        if (isset($_GET['error'])) { ?>
                            Please resubmit your request
                            <?php } else if (isset($_GET['pwdreset'])) {
                            if ($_GET['pwdreset'] === 'successfull') {
                            ?>
                                <p class="wow fadeInUp" data-wow-delay="0.5s">Request successfull check your email!</p>
                            <?php }
                        } else { ?>
                            Reset your password
                            <p class="wow fadeInUp small-text" data-wow-delay="0.5s">An e-mail will be sent to you with instructions on how to reset your password.</p>
                        <?php } ?>
                    </h3>
                    <form class="reset-password-form" action="./assets/include/reset-request.inc.php" method="post">
                        <input type="email" name="email" placeholder="Enter your e-mail address" required>
                        <button type="submit" name="reset-request-submit">Request password recovery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- RESET PASSWORD ENDS HERE -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
