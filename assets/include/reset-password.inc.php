<?php
// CHECK IF USER CLICKED THE RESET BUTTON
if (isset($_POST['reset-password-submit'])) {
    require 'db.inc.php';

    // GATHER FORM DATA
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-confirm'];

    // VALIDATE DATA
    if ($password !== $confirm_password) {
        header("Location: ../../create-new-password.php?error=passwordmismatch");
        exit();
    }

    // MAKE PREPARED STATEMENT
    $currentDate = date("U");
    $sql = "SELECT * FROM pwdReset WHERE selector = ? AND expires >= ?;";
    $stmt = mysqli_stmt_init($conn);

    // CHECK FOR SQL ERROR
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../reset-password.php?error=sqlerror");
        exit();
    } else {
        // BIND PARAMETER
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        // STORE AND FETCH DATA FROM DATABASE
        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            header("Location: ../../reset-password.php?error=nodata");
            exit();
        } else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row['token']);
            if ($tokenCheck === false) {
                header("Location: ../../reset-password.php?error=tokenMismatch");
                exit();
            } else if ($tokenCheck === true) {
                $tokenEmail = $row['email'];

                $sql = "SELECT * FROM users WHERE email = ?;";
                $stmt = mysqli_stmt_init($conn);

                // CHECK FOR SQL ERROR
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../reset-password.php?error=sqlerror");
                    exit();
                } else {
                    // BIND PARAMETER
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    // STORE AND FETCH DATA FROM DATABASE
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        header("Location: ../../reset-password.php?error=nodata");
                        exit();
                    } else {
                        $sql = "UPDATE users SET pwd = ? WHERE email = ?;";
                        $stmt = mysqli_stmt_init($conn);

                        // CHECK FOR SQL ERROR
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../../reset-password.php?error=sqlerror");
                            exit();
                        } else {
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                            // BIND PARAMETER
                            mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            // NOW DELETE TOKEN
                            $sql = "DELETE FROM pwdReset WHERE email = ?;";
                            $stmt = mysqli_stmt_init($conn);

                            // CHECK FOR SQL ERROR
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                header("Location: ../../reset-password.php?error=sqlerror");
                                exit();
                            } else {
                                // BIND PARAMETER
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../../login.php?msg=pwdUpdateSuccessful");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../../login.php");
}
