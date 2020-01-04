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

                            <?php
                            
                            $img = "./images/prod-04.jpg";
                            $title = "Daily Planner 2017 in Green";
                            $price = "2000";
                            $data = "?img=$img&title=$title&price=$price";
                            ?>

                            <a href="./product.php<?php echo $data; ?>">
                                <p id="price">Rs. <?php echo $price; ?></p>
                                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                                <p id="prod-desc"><?php echo $title; ?></p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">

                            <?php
                            $img = "./images/prod-05.jpg";
                            $title  = "Daily Planner 2017 in Blue";
                            $price = "3000"; 
                            $data = "?img=$img&title=$title&price=$price";
                            ?>

                            <a href="./product.php<?php echo $data; ?>">
                                <p id="price">RS. <?php echo $price; ?></p>
                                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                                <p id="prod-desc"><?php echo $title; ?></p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">

                            <?php
                            $img = "./images/prod-06.jpg";
                            $title = "Daily Planner 2017 in Brown";
                            $price = "1000";
                            $data = "?img=$img&title=$title&price=$price";
                            ?>

                            <a href="./product.php<?php echo $data; ?>">
                                <p id="price">RS. <?php echo $price; ?></p>
                                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                                <p id="prod-desc"><?php echo $title; ?></p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">

                            <?php
                            $img = "./images/prod-07.jpg";
                            $title = "Daily Planner 2017 in Dark Brown";
                            $price = "2500";
                            $data = "?img=$img&title=$title&price=$price";
                            ?>

                            <a href="./product.php<?php echo $data; ?>">
                                <p id="price">RS. <?php echo $price; ?></p>
                                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                                <p id="prod-desc"><?php echo $title; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLLECTION ENDS -->

        <!-- COLLECTION STARTS -->

        <div class="collection">
            <p id="heading">Latest collection</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                            <a href="./product.php?product=./images/prod-04.jpg">
                                <p id="price">RS. 2000</p>
                                <img src="./images/prod-04.jpg" alt="prod-04">
                                <p id="prod-desc">Daily Planner 2019 in Green</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                            <a href="./product.php?product=./images/prod-05.jpg">
                                <p id="price">RS. 3000</p>
                                <img src="./images/prod-05.jpg" alt="prod-05">
                                <p id="prod-desc">Daily Planner 2019 in Blue</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                            <a href="./product.php?product=./images/prod-06.jpg">
                                <p id="price">RS. 1000</p>
                                <img src="./images/prod-06.jpg" alt="prod-06">
                                <p id="prod-desc">Daily Planner 2019 in Brown</p>
                            </a>
                        </div>
                        <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                            <a href="./product.php?product=./images/prod-07.jpg">
                                <p id="price">RS. 2500</p>
                                <img src="./images/prod-07.jpg" alt="prod-07">
                                <p id="prod-desc">Daily Planner 2019 in Dark Brown</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLLECTION ENDS -->
        
        <?php
        // IMPORT FOOTER
        require './assets/include/footer.inc.php';
