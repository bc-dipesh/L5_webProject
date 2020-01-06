<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="admin-container">

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
                   <h1>Available Actions</h1>
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <form id="prod-upload-form" action="./assets/include/edit-prod.inc.php" method="post" enctype="multipart/form-data">
                        <label for="prod-name" class="wow fadeInUp" data-wow-delay="0.6s"><b>Product name</b></label>
                        <input type="text" placeholder="Enter Product name..." name="prod-name" value="<?php echo $product_name; ?>" required>

                        <label for="prod-image" class="wow fadeInUp" data-wow-delay="0.7s"><b>Select Image</b></label>
                        <input type="file" name="prod-image">

                        <label for="prod-desc" class="wow fadeInUp" data-wow-delay="0.8s"><b>Description</b></label>
                        <textarea rows="4" cols="60" name="prod-desc"><?php echo $product_desc; ?></textarea>

                        <label for="prod-price" class="wow fadeInUp" data-wow-delay="0.9s"><b>Price</b></label>
                        <input type="number" step="0.01" name="prod-price" value="<?php echo $product_price; ?>" required>

                        <label for="prod-table" class="wow fadeInUp" data-wow-delay="0.10s"><b>Table Name</b></label>
                        <select name="prod-table">
                            <option value="bestSeller">Best Seller</option>
                            <option value="latestCollection">Latest Collection</option>
                        </select>

                        <input readonly type="text" name="img" value="<?php echo $_GET['img']; ?>">

                        <button type="submit" name="prod-edit-submit">Edit/Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT ENDS HERE -->

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
