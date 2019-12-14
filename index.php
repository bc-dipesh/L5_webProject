<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B.C. Store - Shopping made easy</title>
    <meta name="description" content="online shopping store">
    <meta name="author" content="Dipesh B.C.">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/et-line-icons.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

</head>

<body>

    <header id="masthead" class="masthead">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 top-left text-left">
                        <p class="top-contact">
                            <i class="ti-email"></i><span><a href="#">bcdipeshwork@gmail.com</a></span>
                            <i class="ti-mobile"></i><span>+977 9861591162</span>
                        </p>
                    </div>

                    <div class="col-sm-7 top-right text-right">

                        <div id="language" class="language dropdown">
                            <a href="#" class="current-title">English</a>
                            <ul class="unsorted-list">
                                <li>Nepali</li>
                            </ul>
                        </div>

                        <div class="wish-list">
                            <a href="#" class="current-title">Wishlist</a>
                            <span class="count">0</span>
                            <span><i class="ti-heart"></i></span>
                        </div>

                        <div class="checkout"><a href="checkout.php">Checkout <i class="ti-check-box"></i></a></div>

                        <div class="my-account dropdown">
                            <a href="#">My Account<i class="ti-user"></i></a>
                            <ul class="unsorted-list">
                                <li><a href="register.php">Log In</a></li>
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="cart.php">My Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <h1><a class="navbar-brand hidden xs" href="./"><img src="#" alt="site logo"></a></h1>
                    </div>

                    <div class="col-sm-7">
                        <div class="top-search-form">
                            <form action="#" method="post" class="menu-form">
                                <fieldset>
                                    <select name="category" id="category">
                                        <option selected="selected">All Categories</option>
                                        <option>Men's Wear</option>
                                        <option>Women's Wear</option>
                                        <option>Kid's Wear</option>
                                    </select>
                                </fieldset>

                                <input type="text" placeholder="Keywords ..." class="form-control">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="shop-cart">
                            <a class="cart-control" href="#" title="View your shopping cart">
                                <i class="ti-bag"></i>
                                <span class="count">0</span>
                                <span>Cart - </span>
                                <span class="currency">Rs</span>
                                <span class="amount">345.00</span>
                            </a>

                            <div class="cart-items">
                                <div class="widget_shopping_cart_content">
                                    <div class="cart-top">
                                        <div class="item media">
                                            <button class="btn"><i class="fa fa-close"></i></button>

                                            <div class="item-thumbnail media-left">
                                                <img src="#" alt="Item Thumbnail">
                                            </div>

                                            <div class="item-details media-body">
                                                <div class="rating"><input type="hidden" class="rating-tooltip-manaul" data-filled="fa fa-star" data-empty="fa fa-star-o" data-farction="5" /></div>
                                                <h4 class="item-title"><a href="#">Product Name here</a></h4>

                                                <div class="item-price">
                                                    <div class="item-price">
                                                        <span class="currency">Rs</span>
                                                        <span class="price">65</span>
                                                        <span class="item-count">3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-middle">
                                        <button class="btn pull-left"><i class="ti-trash"></i> Empty Cart</button>
                                        <div class="price-total pull-right">
                                            <span>Sub total:</span>
                                            <span class="currency">Rs</span><span class="price">2500.00</span>
                                        </div>
                                    </div>

                                    <div class="cart-bottom">
                                        <a href="cart.php" class="btn pull-left"><i class="icons icon-basket-loaded"></i> View Cart</a>
                                        <a href="checkout.php" class="btn pull-right">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand visible-xs" href="./">
                        <img src="#" alt="Site Logo">
                    </a>
                </div>

                <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
                    <ul class="nav navbar-nav">
                        <li class="menu-item menu-item-has-children active">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
                            <a href="#">Shop</a>
                        </li>
                    </ul>
                </nav>

                <div class="menu-social pull-right">
                    <a href="www.instagram.com/dipesh_budhachettri/" target="_blank"><i class="ti-instagram"></i></a>
                    <a href="www.facebook.com/dipesh.budhachettri.39" target="_blank"><i class="ti-facebook"></i></a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner text-center background-bg" data-image-src="#">
        <div class="section-padding">
            <div class="container">
                <div class="banner-content">
                    <h4 class="top-title">Brand New</h4>
                    <h2 class="main-title">Winter Collection</h2>
                    <h3 class="sub-title">The Winter is here to keep you cool</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere mauris libero, nec dignissim sapien laoreet eu.
                        Vestibulum vitae neque mauris. Integer rutrum quam ac vehicula ullamcorper
                    </p>
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="collection">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 left-content">
                        <div class="item">
                            <div class="item-thumb">
                                <a href="#">
                                    <img src="#" alt="Item Image">
                                </a>
                            </div>
                            <div class="item-details">
                                <h3 class="item-title">Kids</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 right-content">
                        <div class="item">
                            <div class="item-thumb">
                                <a href="#">
                                    <img src="#" alt="Item Image">
                                </a>
                            </div>
                            <div class="item-details">
                                <h3 class="item-title">Men</h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-thumb">
                                <a href="#">
                                    <img src="#" alt="Item Image">
                                </a>
                            </div>
                            <div class="item-details">
                                <h3 class="item-title">Women</h3>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="trending bg-gray">
        <div class="section-padding">
            <div class="container">
                <div class="section-top">
                    <h2 class="section-title">Trending<span></span></h2>
                </div>

                <div class="row">
                    <div class="trending-slider owl-carousel owl-theme">

                        <div class="item">
                            <div class="col-md-6">
                                <div class="item-thumbnail">
                                    <img src="#" alt="Item Thumbnail">
                                </div>
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist</span></button>
                                    <a class="fancybox" href="#" alt="Item Thumbnail"><i class="fa fa-search"></i><span> Quick View</span></a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item-details">
                                    <h3 class="item-title"><a href="#">Product name</a></h3>
                                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-farction="5" /></div>
                                    <div class="item-price">
                                        <span class="curreny">Rs</span>
                                        <span class="price">8000.00</span>
                                    </div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere mauris libero, nec dignissim sapien laoreet eu.
                                        Vestibulum vitae neque mauris. Integer rutrum quam ac vehicula ullamcorper
                                    </p>
                                    <a href="#" class="btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-6">
                                <div class="item-thumbnail">
                                    <img src="#" alt="Item Thumbnail">
                                </div>
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist</span></button>
                                    <a class="fancybox" href="#" alt="Item Thumbnail"><i class="fa fa-search"></i><span> Quick View</span></a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item-details">
                                    <h3 class="item-title"><a href="#">Product name</a></h3>
                                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-farction="5" /></div>
                                    <div class="item-price">
                                        <span class="curreny">Rs</span>
                                        <span class="price">8000.00</span>
                                    </div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere mauris libero, nec dignissim sapien laoreet eu.
                                        Vestibulum vitae neque mauris. Integer rutrum quam ac vehicula ullamcorper
                                    </p>
                                    <a href="#" class="btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-6">
                                <div class="item-thumbnail">
                                    <img src="#" alt="Item Thumbnail">
                                </div>
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist</span></button>
                                    <a class="fancybox" href="#" alt="Item Thumbnail"><i class="fa fa-search"></i><span> Quick View</span></a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item-details">
                                    <h3 class="item-title"><a href="#">Product name</a></h3>
                                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-farction="5" /></div>
                                    <div class="item-price">
                                        <span class="curreny">Rs</span>
                                        <span class="price">8000.00</span>
                                    </div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere mauris libero, nec dignissim sapien laoreet eu.
                                        Vestibulum vitae neque mauris. Integer rutrum quam ac vehicula ullamcorper
                                    </p>
                                    <a href="#" class="btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-6">
                                <div class="item-thumbnail">
                                    <img src="#" alt="Item Thumbnail">
                                </div>
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist</span></button>
                                    <a class="fancybox" href="#" alt="Item Thumbnail"><i class="fa fa-search"></i><span> Quick View</span></a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item-details">
                                    <h3 class="item-title"><a href="#">Product name</a></h3>
                                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-farction="5" /></div>
                                    <div class="item-price">
                                        <span class="curreny">Rs</span>
                                        <span class="price">8000.00</span>
                                    </div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere mauris libero, nec dignissim sapien laoreet eu.
                                        Vestibulum vitae neque mauris. Integer rutrum quam ac vehicula ullamcorper
                                    </p>
                                    <a href="#" class="btn">Add to cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="subscribe-details">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="section-top">
                            <h3 class="section-title">Stay up to date <span></span></h3>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <div class="col-sm-7">
                        <form class="subscribe-form" action="#" method="post">
                            <input class="form-control" type="email" placeholder="myemail@email.com">
                            <input class="btn btn-subscribe" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-logo bg-gray text-center">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="#"><img src="#" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="#"><img src="#" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="#"><img src="#" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="#"><img src="#" alt="Brand Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_about_us">
                                <a class="footer-top" href="#"><img src="#" alt="Logo"></a>
                                <div class="widget-details">
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                    <address>
                                        Sahayoginagar-41, Kathmandu, Nepal
                                    </address>
                                    <span>+977-9861591162</span>
                                    <span><a href="#">support@bcstore.com</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6">
                            <div class="widget widget_useful_links">
                                <h4 class="widget-title">Useful links</h4>
                                <div class="widget-details">
                                    <span><i class="ti-control-record"></i><a href="#">About us</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Customer service</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">New Collection</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Best Sellers</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Manufacturers</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Privacy policy</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Terms & condition</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6">
                            <div class="widget widget_shop_links">
                                <h4 class="widget-title">Shops</h4>
                                <div class="widget-details">
                                    <span><i class="ti-control-record"></i><a href="#">Trending Now</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Women</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Men</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Kids</a></span>
                                    <span><i class="ti-control-record"></i><a href="#">Top brands</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_instagram_feed">
                                <h4 class="widget-title">Instagram Photos</h4>
                                <div class="widget-details">
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                    <a href="#"><img src="#" alt="Instagram Image"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-left">
                        <div class="copyright">
                            © <a href="#">BC Store</a> 2019 | Developed with Love by <a href="#">2FY</a>
                        </div>
                    </div>

                    <div class="col-sm-5 text-right">
                        <div class="payment-list">
                            <a href="#"><img src="#" alt="Payment Logo"></a>
                            <a href="#"><img src="#" alt="Payment Logo"></a>
                            <a href="#"><img src="#" alt="Payment Logo"></a>
                            <a href="#"><img src="#" alt="Payment Logo"></a>
                            <a href="#"><img src="#" alt="Payment Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="scroll-to-top" class="scroll-to-top">
        <i class="fa fa-angle-double-up"></i>
    </div>


</body>

</html>