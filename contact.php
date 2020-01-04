<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="contact-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.inc.php';
    ?>

    <!-- DATA SECTION STARS -->

    <div class="about-hero">
        <div class="container-fluid hero wow fadeInUp">
            <h1 id="hero-title">Contact us</h1>
        </div>

        <div class="container content">
            <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat optio
                expedita minus accusantium facere placeat magnam maiores nulla magni dolore blanditiis eligendi,
                aliquam odio voluptates cum ut officia sit nemo.</p>

            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea rows="3" class="form-control wow fadeInUp" data-wow-delay="0.8s"></textarea>
                </div>

                <div class="add-prod wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#">SUBMIT</a>
                </div>
            </form>

        </div>
    </div>

    <!-- DATA SECTION ENDS -->

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
