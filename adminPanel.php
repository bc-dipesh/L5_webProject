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

                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <form id="prod-upload-form" action="./assets/include/upload-file.inc.php" method="post" enctype="multipart/form-data">
                        <label for="prod-id" class="wow fadeInUp" data-wow-delay="0.5s"><b>Product ID</b></label>
                        <input type="number" placeholder="Enter Product ID..." name="prod-id" value="<?php if (isset($_GET['prod-id'])) echo $_GET['prod-id']; ?>" required>

                        <label for="prod-name" class="wow fadeInUp" data-wow-delay="0.6s"><b>Product name</b></label>
                        <input type="text" placeholder="Enter Product name..." name="prod-name" value="<?php if (isset($_GET['prod-name'])) echo $_GET['prod-name']; ?>" required>

                        <label for="prod-image" class="wow fadeInUp" data-wow-delay="0.7s"><b>Select Image</b></label>
                        <input type="file" name="prod-image" required>

                        <label for="prod-desc" class="wow fadeInUp" data-wow-delay="0.8s"><b>Description</b></label>
                        <textarea rows="4" cols="60" name="prod-desc"></textarea>

                        <label for="prod-price" class="wow fadeInUp" data-wow-delay="0.9s"><b>Price</b></label>
                        <input type="number" step="0.01" name="prod-price" required>

                        <label for="prod-table" class="wow fadeInUp" data-wow-delay="0.10s"><b>Table Name</b></label>
                        <select name="prod-table">
                            <option value="bestSeller">Best Seller</option>
                            <option value="latestCollection">Latest Collection</option>
                        </select>

                        <button type="submit" name="prod-upload-submit">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT ENDS HERE -->

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
