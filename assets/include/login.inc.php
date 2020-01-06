<?php
// CHECK IF USER CLICKED THE LOGIN BUTTON
if (isset($_POST['login-submit'])) {
    session_start();
    require 'db.inc.php';

    // GATHER FORM DATA
    $mailuid = $_POST['mailuid'];
    $password = $_POST['psw'];

    // MAKE PREPARED STATEMENT
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);

    // CHECK FOR SQL ERROR
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['msg'] = 'sqlError';
        header("location: ../../login.php");
        exit();
    } else {
        // BIND AND EXECUTE STATEMENT
        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // MATCH USERPASSWORD FROM THE DATABASE
            $psw_check = password_verify($password, $row['pwd']);
            if ($psw_check === FALSE) {
                $_SESSION['msg'] = 'wrongPwd';
                header("location: ../../login.php");
                exit();
            } else if ($psw_check === TRUE) {
                if (!empty($row['isAdmin'])) {
                    if ($row['isAdmin'] === 1) {
                        session_name("admin");
                        $_SESSION['isAdmin'] = TRUE;
                    }
                } else {
                    session_name("member");
                    $_SESSION['isUser'] = TRUE;
                    $_SESSION['fav_prod'] = "";
                }
                $_SESSION['msg'] = 'loginSuccess';
                header("location: ../../login.php");
                exit();
            } else {
                $_SESSION['msg'] = 'wrongPwd';
                header("location: ../../login.php");
                exit();
            }
        } else {
            $_SESSION['msg'] = 'notRegistered';
            header("location: ../../login.php");
            exit();
        }
        // CLOSE DATABASE CONNECTION
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    header("Location: ../../index.php");
    exit();
}
