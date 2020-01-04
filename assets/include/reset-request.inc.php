<?php
// CHECK IF USER HAS CLICKED RESET BUTTON
if (isset($_POST["reset-request-submit"])) {
    require 'db.inc.php';

    // GATHER FORM DATA
    $userEmail = $_POST['email'];

    // GENERATE TOKENS
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    // PASSWORD RESET REQUEST LINK
    $url = "www.bcshop.rf.gd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    // EXPIRY TIME FOR TOKENS
    $expires = date("U") + 1800;

    // MAKE PREPARED STATEMENT
    $sql = "DELETE FROM pwdReset WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    // CHECK FOR SQL ERROR
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../login.php?msg=sqlError");
        exit();
    } else {
        // BIND PARAMETER
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (email, selector, token, expires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../login.php?msg=sqlError");
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    // CLOSE DATABASE CONNECTION
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $destination = $userEmail;
    $subject = 'Password recovery for B.C. Shop';
    $message = '<p>We received a password reset request. The link to reset your password is given below. If you did not make this request, please ignore this email</p>
                <p>Here is your password reset link: </br>
                <a> href="' . $url . '">' . $url . '</a></p>';
    $header = "From: bcshop@gmail.com\r\n
               Reply-To: bcdipeshwork@gmail.com\r\n
               Content-type: text/html\r\n";
    mail($destination, $subject, $message, $header);
    header("Location: ../../reset-password.php?pwdreset=successfull");
} else {
    header("Location: ../../login.php");
}
