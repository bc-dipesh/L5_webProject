<?php
// Check if user clicked the signup-submit button
if (isset($_POST['signup-submit'])) {
    require 'db.php';

    // Gather data from form
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-confirm'];

    // Filter user data
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../signup.php?error=invalidemail&uid=" . $username);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$", $username)) {
        header("Location: ../../signup.php?error=invalidmail&uid");
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../../signup.php?error=invalidusername&mail=" . $email);
        exit();
    } else if ($password !== $confirm_password) {
        header("Location: ../../signup.php?error=passwordmismatch&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT username, email FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);

        // Check for error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            // Check if username is already taken
            if ($result_check > 0) {
                header("location: ../../signup.php?error=usernameoremailexists");
                exit();
            } else {
                $sql = "INSERT INTO users(username, email, pwd) VALUES(?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                // Check for error
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../../signup.php?error=sqlerror");
                    exit();
                } else {
                    // Store user data into database
                    // Hash the password
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    // Close the connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Redirect user back to the singup page
    header("Location: ../../signup.php");
    exit();
}
