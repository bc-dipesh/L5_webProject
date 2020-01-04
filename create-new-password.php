<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="reset-password-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.inc.php';
    ?>

    <!-- CREATE NEW PASSWORD STARTS HERE -->
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
                        Reset your password
                    </h3>
                    <?php
                    // GRAB TOKENS FROM URL
                    if (isset($_GET['selector']) && isset($_GET['validator'])) {
                        $selector = $_GET['selector'];
                        $validator = $_GET['validator'];

                        // CHECK FOR EMPTY TOKENS
                        if (empty($selector) || empty($validator)) { ?>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">There was an error validating your request.</p>
                            <?php } else {
                            // VALIDATE THE TOKENS
                            if (ctype_xdigit($selector) && ctype_xdigit($validator)) {
                            ?>
                                <form class="create-new-password-form" action="./assets/include/reset-password.inc.php" method="post">
                                    <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                                    <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                                    <input type="password" name="psw" placeholder="Enter a new password..." required>
                                    <input type="password" name="psw-confirm" placeholder="Confirm password..." required>
                                    <button type="submit" name="reset-password-submit">Request password</button>
                                </form>
                    <?php }
                        }
                    } else {
                        header("Location: ./login.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <!-- CREATE NEW PASSWORD ENDS HERE -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
