<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="product-container">
    <div class="shop-container">

        <?php
        // IMPORT NAV 
        require './assets/include/nav.inc.php';
        ?>

        <div class="whitespaces"></div>

        <!-- COLLECTION STARTS -->

        <div class="collection">
            <p id="heading">Best sellers</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                            <a href="product.html">
                                <p id="price">Rs. 2000</p>
                                <img src="images/prod-04.jpg" alt="prod-04">
                                <p id="prod-desc">Daily Planner 2019 in Green</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                            <a href="product.html">
                                <p id="price">RS. 3000</p>
                                <img src="images/prod-05.jpg" alt="prod-05">
                                <p id="prod-desc">Daily Planner 2019 in Blue</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                            <a href="product.html">
                                <p id="price">RS. 1000</p>
                                <img src="images/prod-06.jpg" alt="prod-06">
                                <p id="prod-desc">Daily Planner 2019 in Brown</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                            <a href="product.html">
                                <p id="price">RS. 2500</p>
                                <img src="images/prod-07.jpg" alt="prod-07">
                                <p id="prod-desc">Daily Planner 2019 in Dark Brown</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLLECTION ENDS -->

        <!-- BANNER SECTION STARTS -->

        <div class="row prod-sec">
            <div class="col-lg-6 prod-img">
                <img src="images/single-prod.jpg" alt="single-prod">
            </div>

            <div class="col-lg-4 prod-desc">
                <br><br>
                <p class="wow fadeInUp" data-wow-delay="0.5s">The way to get started is to quit talking and begin doing.
                    Get started with our tools and boost your productivity.</p>

                <div class="link wow fadeInUp" data-wow-delay="0.6s">
                    <a href="shop.html">shop now <ion-icon name="arrow-round-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <!-- BANNER SECTION ENDS -->

        <!-- COLLECTION STARTS -->

        <div class="collection">
            <p id="heading">Latest collection</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                            <a href="product.html">
                                <p id="price">RS. 2000</p>
                                <img src="images/prod-04.jpg" alt="prod-04">
                                <p id="prod-desc">Daily Planner 2019 in Green</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                            <a href="product.html">
                                <p id="price">RS. 3000</p>
                                <img src="images/prod-05.jpg" alt="prod-05">
                                <p id="prod-desc">Daily Planner 2019 in Blue</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                            <a href="product.html">
                                <p id="price">RS. 1000</p>
                                <img src="images/prod-06.jpg" alt="prod-06">
                                <p id="prod-desc">Daily Planner 2019 in Brown</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                            <a href="product.html">
                                <p id="price">RS. 2500</p>
                                <img src="images/prod-07.jpg" alt="prod-07">
                                <p id="prod-desc">Daily Planner 2019 in Dark Brown</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLLECTION ENDS -->

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
                        <img src="images/prod-01.jpg" alt="prod-01">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                            illum!</p>
                    </div>

                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                        <img src="images/prod-02.jpg" alt="prod-02">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                            illum!</p>
                    </div>

                    <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.7s">
                        <img src="images/prod-03.jpg" alt="prod-03">
                        <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla
                            illum!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CATEGORIES SECTION ENDS -->

        <div class="whitespaces"></div>

        <?php
        // IMPORT FOOTER
        require './assets/include/footer.inc.php';
