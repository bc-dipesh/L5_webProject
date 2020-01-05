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