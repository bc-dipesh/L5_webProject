<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="product-container">

    <?php
    // IMPORT NECESSARY FILES 
    require './assets/include/nav.inc.php';
    require './assets/include/variables.inc.php';
    $isAdmin = FALSE;
    $isUser = FALSE;
    if (isset($_SESSION['isAdmin'])) {
        $isAdmin = $_SESSION['isAdmin'];
    }
    if (isset($_SESSION['isUser'])) {
        $isUser = $_SESSION['isUser'];
    }
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
                    <br />
                    <div class="add-prod wow fadeInUp" data-wow-delay="1.1s">
                        <?php if ($isAdmin) { ?>
                            <a href="./edit.php?<?php echo $queryString; ?>">Edit/Update Product</a>
                            <a href="./addProd.php">Add Product</a><br><br><br>
                            <a href="./deleteProd.php?img=<?php echo $product_loc; ?>">Delete Product</a>
                        <?php } else if ($isUser) { ?>
                            <a href="./favourites.php?<?php echo $queryString; ?>">Add to favourite</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT ENDS HERE -->

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
