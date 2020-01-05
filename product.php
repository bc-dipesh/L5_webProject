<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="product-container">

    <?php
    // IMPORT NECESSARY FILES 
    require './assets/include/nav.inc.php';
    require './assets/include/variables.inc.php';
    ?>

    <!-- PRODUCT STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <?php if (!empty($queryString)) { ?>
                        <img src="<?php echo $product_loc; ?>" class="img wow fadeInUp" alt="<?php echo $product_name; ?>" />
                    <?php } else {
                        header("location: ./shop.php");
                        exit();
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        <?php echo $product_name; ?>
                    </h3>
                    <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">
                        <?php echo $product_desc; ?>
                    </p>
                    <p id="price" class="wow fadeInUp" data-wow-delay="0.5s">
                        RS. <?php echo $product_price; ?>
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
