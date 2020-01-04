<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="product-container">

    <?php
    // IMPORT NAV 
    require './assets/include/nav.inc.php';
    ?>

    <!-- PRODUCT STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <?php if (!isset($_GET['img'])) {
                        // SET DATA
                        $title = "Daily Planner 2019";
                        $price = 3000;
                    ?>
                        <img src="./images/hero.jpg" class="img wow fadeInUp" alt="hero image" />
                    <?php } else {
                        // UPDATE DATA
                        $img = $_GET['img'];
                        $title = $_GET['title'];
                        $price = $_GET['price'];
                    ?>
                        <img src="<?php echo $img; ?>" class="img wow fadeInUp" alt="<?php echo $title; ?>" />
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        <?php echo $title; ?>
                    </h3>
                    <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, eaque. Autem explicabo reiciendis voluptate vitae magni deserunt, ab mollitia atque.
                    </p>
                    <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">
                        RS. <?php echo $price; ?>
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

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
