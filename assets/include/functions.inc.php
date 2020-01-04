<?php
// CUSTOM FUNCTIONS
function displayLoginForm()
{
?>
    Login to your account
    <form class="loginform" action="./assets/include/login.inc.php" method="post">
        <label for="mailuid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
        <input type="text" placeholder="Enter E-mail/Username..." name="mailuid" required>

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
    Create a new account
    <form class="signupform" action="./assets/include/signup.inc.php" method="post">
        <label for="uid" class="wow fadeInUp" data-wow-delay="0.5s"><b>Username</b></label>
        <input type="text" placeholder="Enter Username..." name="uid" required>

        <label for="mail" class="wow fadeInUp" data-wow-delay="0.6s"><b>E-mail</b></label>
        <input type="email" placeholder="Enter E-mail..." name="mail" required>

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
<?php }
