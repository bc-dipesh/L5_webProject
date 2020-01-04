<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="my-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.inc.php';
    ?>

    <!-- HERO SECTION STARTS -->

    <div class="hero-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 hero-left">
                    <div class="tagline">
                        <p class="wow fadeInUp">
                            Useful tools to stimulate <br />
                            planning, productivity and <br />
                            creativity.
                        </p>
                        <div class="link wow fadeInUp" data-wow-delay="0.6s">
                            <a href="./shop.php">shop now <ion-icon name="arrow-round-forward"></ion-icon></a>
                        </div>
                    </div>
                    <div class="shipping">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            Complimentary shipping orders RS.3000+
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 hero-right">
                    <div class="hero-image">
                        <img src="images/hero.jpg" class="img wow fadeInUp" data-wow-delay="0.3s" alt="hero image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
