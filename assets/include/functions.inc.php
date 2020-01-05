<?php
// IMPORT NECESSARY FILES
require './assets/include/variables.inc.php';

// CUSTOM FUNCTIONS
function displayLoginForm()
{
?>
    <form class="loginform" action="./assets/include/login.inc.php" method="post">
        <label for="mailuid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
        <input type="text" placeholder="Enter E-mail/Username..." name="mailuid" value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>" required>

        <label for="psw" class="wow fadeInUp" data-wow-delay="0.6s"><b>Password</b></label>
        <input type="password" placeholder="Enter Password..." name="psw" required>
        <button type="submit" name="login-submit">Login</button>
        <a href="./signup.php" class="wow fadeInUp" data-wow-delay="0.8s">Signup</a>
        </br>
        <a href="./reset-password.php" class="wow fadeInUp" data-wow-delay="0.8s">Forgot your password?</a>
    </form>
<?php }

function displaySignupForm()
{
?>
    <form class="signupform" action="./assets/include/signup.inc.php" method="post">
        <label for="uid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
        <input type="text" placeholder="Enter Username..." name="uid" value="<?php if (isset($_GET['uid'])) echo $_GET['uid']; ?>" required>

        <label for="mail" class="wow fadeInUp" data-wow-delay="0.6s"><b>E-mail</b></label>
        <input type="email" placeholder="Enter E-mail..." name="mail" value="<?php if (isset($_GET['email'])) echo $_GET['email']; ?>" required>

        <label for="psw" class="wow fadeInUp" data-wow-delay="0.7s"><b>Password</b></label>
        <input type="password" placeholder="Enter Password..." name="psw" required>

        <label for="psw-confirm" class="wow fadeInUp" data-wow-delay="0.8s"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password..." name="psw-confirm" required>

        <button type="submit" name="signup-submit">Signup</button>
    </form>
<?php } ?>

<?php

function displayLogoutBtn()
{
?>
    <form class="logoutForm" action="./assets/include/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
<?php } ?>

<?php

function getProducts($table_name)
{
    require './assets/include/db.inc.php';

    $sql = "SELECT * FROM $table_name;";
    $markup = "";
    $index = 0;
    $products = array();

    if ($result = mysqli_query($conn, $sql)) {
        // FETCH AND STORE PRODUCTS FROM ASSOCIATIVE ARRAY
        while ($row = mysqli_fetch_assoc($result)) {
            $img = $row['location'];
            $title = $row['name'];
            $price = $row['price'];
            $desc = $row['description'];
            $queryString = "?img=$img&title=$title&price=$price&desc=$desc";

            $markup = "<div class='container wow fadeInUp'>
                            <div class='productImage'>
                                <a href='./product.php$queryString'>
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
            $products[$index++] = $markup;
        }
        return $products;
    } else {
        header("location: ../../index.php?msg=sqlError");
        exit();
    }
}
