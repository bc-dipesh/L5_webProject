<?php
// IMPORT HEADER
require './assets/include/header.php';
?>
<div class="product-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.php';
    ?>

    <!-- PRODUCT STARTS HERE -->

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
                        Daily Planner 2019
                    </h3>
                    <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">
                        RS. 3000
                    </p>

                    <div class="input-row">
                        <input type="radio" id="radio-input-1" checked />
                        <label for="radio-input-1" class="input-helper input-helper--radio wow fadeInUp" data-wow-delay="0.6s">add monogram (+Rs. 100)</label>
                        <br />
                        <input type="radio" id="radio-input-2" />
                        <label for="radio-input-2" class="input-helper input-helper--radio wow fadeInUp" data-wow-delay="0.7s">add gift wrap (+Rs. 100)</label>
                    </div>
                    <br />
                    <input type="number" placeholder="QTY" class="wow fadeInUp" data-wow-delay="0.8s" />
                    <input type="number" placeholder="SIZE" class="wow fadeInUp" data-wow-delay="1s" />
                    <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                        <a href="#">Add to bag</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT ENDS HERE -->

    <!-- CATEGORIES SECTION STARTS -->

    <div class="container-fluid">
        <div class="row section shop">
            <div class="col-lg-8">
                <p class="wow fadeInUp" data-wow-delay="0.4s">
                    Do not wait; the time will never be right. Start where you stand,
                    and work with whatever tools you may have at your command, and
                    better tools will be found as you go along.
                </p>

                <div class="link wow fadeInUp" data-wow-delay="0.6s">
                    <a href="shop.html">learn more <ion-icon name="arrow-round-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row some-cards">
                <div class="col-lg-3"></div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/prod-01.jpg" alt="prod-01" />
                    <p id="prod-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos,
                        voluptas nulla illum!
                    </p>
                </div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/prod-02.jpg" alt="prod-02" />
                    <p id="prod-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos,
                        voluptas nulla illum!
                    </p>
                </div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/prod-03.jpg" alt="prod-03" />
                    <p id="prod-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos,
                        voluptas nulla illum!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORIES SECTION ENDS -->

    <div class="whitespaces"></div>

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.php';
