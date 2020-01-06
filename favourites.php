<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="favourite-container">
    <div class="shop-container">
        <?php
        // IMPORT NECESSARY FILES
        require './assets/include/nav.inc.php';
        require './assets/include/functions.inc.php';
        require './assets/include/variables.inc.php';
        ?>

        <div class="whitespaces"></div>

        <!-- BEST SELLER COLLECTION STARTS -->
        <?php
        if (isset($_GET['img']) && isset($_GET['title']) && isset($_GET['price'])) {
            $img = $_GET['img'];
            $title = $_GET['title'];
            $price = $_GET['price'];
            $desc = $_GET['desc'];

            $_SESSION['fav_prod'] .= "<div class='container wow fadeInUp'>
        <div class='productImage'>
            <a href='./product.php?img=$img&title=$title&price=$price&desc=$desc'>
                <img src='$img' alt='$title'>
            </a>
        </div>
        <div class='price'>
            <h4>PRICE</h4>
            <span>RS. $price</span>
        </div>
        <div class='productName'>
            $title
        </div>
    </div>";
        }
        ?>

        <div class="collection">
            <p id="heading">Favourites</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <?php
                        if (isset($_SESSION['fav_prod'])) {
                            echo $_SESSION['fav_prod'];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEST SELLER COLLECTION ENDS -->

        <?php
        // IMPORT FOOTER
        require './assets/include/footer.inc.php';
