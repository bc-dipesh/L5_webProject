<?php
// IMPORT HEADER
require './assets/include/header.php';
?>
<div class="my-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.php';
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
                    </div>

                    <div class="shipping">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            Complimentary ground shipping on U.S. orders RS.3000+
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

    <!-- HERO SECTION ENDS -->

    <!-- PRODUCT LIST STARTS -->

    <div class="section prod-list">
        <div class="container-fluid">
            <div class="row some-cards">
                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                    <a href="product.html">
                        <p id="price">RS. 2000</p>
                        <img src="images/prod-04.jpg" alt="product-04" />
                        <p id="prod-desc">Daily Planner 2019 in Green</p>
                    </a>
                </div>
                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                    <a href="product.html">
                        <p id="price">RS. 3000</p>
                        <img src="images/prod-05.jpg" alt="product-05" />
                        <p id="prod-desc">Daily Planner 2019 in Blue</p>
                    </a>
                </div>
                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                    <a href="product.html">
                        <p id="price">RS. 1000</p>
                        <img src="images/prod-06.jpg" alt="product-06" />
                        <p id="prod-desc">Daily Planner 2019 in Brown</p>
                    </a>
                </div>
                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                    <a href="product.html">
                        <p id="price">RS. 2500</p>
                        <img src="images/prod-07.jpg" alt="product-07" />
                        <p id="prod-desc">Daily Planner 2019 in Dark Brown</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT LIST ENDS -->

    <!-- BANNER SECTION STARTS -->

    <div class="row prod-sec">
        <div class="col-lg-6 prod-img">
            <img src="images/single-prod.jpg" alt="single-prod" />
        </div>

        <div class="col-lg-4 prod-desc">
            <br /><br />
            <p class="wow fadeInUp" data-wow-delay="0.5s">
                THe way to get started is to quit talking and begin doing. Get
                started with our tools and boost your productivity.
            </p>

            <div class="link wow fadeInUp" data-wow-delay="0.6s">
                <a href="shop.html">shop now <ion-icon name="arrow-round-forward"></ion-icon></a>
            </div>
        </div>
    </div>

    <!-- BANNER SECTION ENDS -->

    <!-- CATEGORIES SECTION STARTS -->

    <div class="container-fluid">
        <div class="row section shop">
            <div class="col-lg-8">
                <p class="wow fadeInUp" data-wow-delay="0.4s">Do not wait; the time will never be right. Start where
                    you stand, and work with whatever tools you may have at your command, and better tools will be
                    found as you go along.</p>

                <div class="link wow fadeInUp" data-wow-delay="0.6s">
                    <a href="shop.html">learn more <ion-icon name="arrow-round-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row some-cards">
                <div class="col-lg-3"></div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/prod-01.jpg" alt="">
                    <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                        illum!</p>
                </div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/prod-02.jpg" alt="">
                    <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                        illum!</p>
                </div>

                <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/prod-03.jpg" alt="">
                    <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                        illum!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORIES SECTION ENDS -->

    <br /><br /><br />

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.php';
