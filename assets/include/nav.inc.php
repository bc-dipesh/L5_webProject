    <!-- NAVIGATION STARTS -->

    <div class="nav">
        <div class="menu-open">
            <ion-icon name="menu"></ion-icon>
        </div>
        <div class="brand">
            <span><a href="./index.php">B.C. Store</a></span>
        </div>
        <div class="cart">
            <ion-icon name="cart"></ion-icon>
        </div>
        <div class="menu">
            <div class="menu-close">
                <ion-icon name="close"></ion-icon>
            </div>
            <ul>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./signup.php">Signup</a></li>
                <?php if (isset($_SESSION['isUser'])) {
                    if ($_SESSION['isUser']) { ?>
                        <li><a href="./favourites.php">Favourites</a></li>
                <?php }
                } ?>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./shop.php">Collection</a></li>
                <li><a href="./about.php">Our story</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
            <div class="media-menu">
                <ul>
                    <li>
                        <ion-icon name="logo-facebook"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="logo-twitter"></ion-icon>
                    </li>
                    <li>
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- NAVIGATION ENDS -->