<?php
// CHECK IF USER HAS CLICKED SIGNUP BUTTON
if (isset($_POST['signup-submit'])) {
    require 'db.inc.php';

    // GATHER FORM DATA
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-confirm'];

    // FILTER ABOVE DATA
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../signup.php?msg=invalidEmail&uid=" . $username);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$", $username)) {
        header("Location: ../../signup.php?msg=invalidEmail&uid");
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../../signup.php?msg=invalidUsername&email=" . $email);
        exit();
    } else if ($password !== $confirm_password) {
        header("Location: ../../signup.php?msg=passwordMismatch&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        // MAKE PREPARED STATEMENT
        $sql = "SELECT username, email FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);

        // CHECK FOR SQL ERROR
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../signup.php?msg=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            // CHECK IF USERNAME/E-MAIL IS AVAILABLE
            if ($result_check > 0) {
                header("location: ../../signup.php?msg=usernameOrEmailAlreadyexists");
                exit();
            } else {
                $sql = "INSERT INTO users(username, email, pwd) VALUES(?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../../signup.php?msg=sqlError");
                    exit();
                } else {
                    // STORE USER IN THE DATABASE
                    // HASH THE PASSWORD
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../../login.php?msg=successfullySignedUp");
                    exit();
                }
            }
        }
    }
    // CLOSE DATABASE CONNECTION
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../../signup.php");
    exit();
}
