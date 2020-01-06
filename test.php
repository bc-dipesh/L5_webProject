INSERT INTO `products`(`name`, `location`, `price`, `description`) VALUES ('Daily Planner 2017 in Dark Blue', './images/prod-03.jpg', 1000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, eaque. Autem explicabo reiciendis voluptate vitae magni deserunt, ab mollitia atque.');
CREATE TABLE latestCollection (
`id` int(100) PRIMARY KEY AUTO_INCREMENT,
`name` tinytext DEFAULT NULL,
`location` tinytext DEFAULT NULL,
`price` double DEFAULT NULL,
`description` longtext DEFAULT NULL
);

<p id="heading" class="category-heading">Categories</p>
<form class="category-form" action="./assets/include/variables.inc.php" method="POST">
    <div class="inputGroup">
        <input id="option1" name="category" value="bestSeller" type="checkbox" onclick="showCategory('bestSeller');" />
        <label for="option1">Best Seller</label>
    </div>

    <div class="inputGroup">
        <input id="option2" name="category" value="latestCollection" type="checkbox" onclick="showCategory('latestCollection');" />
        <label for="option2">Latest Collection</label>
    </div>
</form>


<!-- COLLECTION STARTS -->

<div id="allProducts" class="collection">
    <p id="heading">All Products</p>

    <div class="section prod-list">
        <div class="container-fluid">
            <div class="row some-cards">
                <div class='col-lg-12 wow fadeInUp'>
                    <p id="heading" class="category-heading">Categories</p>
                    <h3 id="heading" class="search-heading">Search Products</h3>
                    <form>
                        <input type="text" id="search-text" class="form-control" onkeyup="showSuggestion();">
                    </form>
                    <p><span id="output"></span></p>
                    <form class="category-form" action="./assets/include/variables.inc.php" method="POST">
                        <div class="inputGroup">
                            <input id="option1" name="category" value="bestSeller" type="checkbox" onclick="showCategory('bestSeller');" />
                            <label for="option1">Best Seller</label>
                        </div>

                        <div class="inputGroup">
                            <input id="option2" name="category" value="latestCollection" type="checkbox" onclick="showCategory('latestCollection');" />
                            <label for="option2">Latest Collection</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- COLLECTION ENDS -->

<!-- BEST SELLER COLLECTION STARTS -->

<div id="bestSeller" class="collection">
    <p id="heading">Best Seller</p>

    <div class="section prod-list">
        <div class="container-fluid">
            <div class="row some-cards">
                <?php
                $products = getProducts('bestSeller');
                foreach ($products as $markup) {
                    echo $markup;
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- BEST SELLER COLLECTION ENDS -->

<!-- LATEST COLLECTION STARTS -->

<div id="latestCollection" class="collection">
    <p id="heading">Latest collection</p>

    <div class="section prod-list">
        <div class="container-fluid">
            <div class="row some-cards">
                <?php
                $products = getProducts('latestCollection');
                foreach ($products as $markup) {
                    echo $markup;
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- LATEST COLLECTION ENDS -->