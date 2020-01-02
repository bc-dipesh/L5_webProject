<?php
// Check if user clicked the login-submit button
if (isset($_POST['login-submit'])) {
    require 'db.php';

    // Gather data from form
    $mailuid = $_POST['mailuid'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);

    // Check for error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../login.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (empty($mailuid) || empty($password)) {
            header("location: ../../login.php?error=emptyfields");
            exit();
        } else if ($row = mysqli_fetch_assoc($result)) {
            $psw_check = password_verify($password, $row['pwd']);
            // Check for correct password
            if ($psw_check === FALSE) {
                header("location: ../../login.php?error=wrongpassword");
                exit();
            } else if ($psw_check === TRUE) {
                // Start session for the user
                session_start();
                $_SESSION['userId'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect user back to the login page
                header("location: ../../login.php?login=success");
                exit();
            } else {
                header("location: ../../login.php?error=wrongpassword");
                exit();
            }
        }
        // Close the connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    // Redirect user back to the home page
    header("Location: ../../index.php");
    exit();
}
