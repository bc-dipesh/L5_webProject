<?php
// CHECK IF USER CLICKED THE LOGIN BUTTON
if (isset($_POST['login-submit'])) {
    require 'db.inc.php';

    // GATHER FORM DATA
    $mailuid = $_POST['mailuid'];
    $password = $_POST['psw'];

    // MAKE PREPARED STATEMENT
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);

    // CHECK FOR SQL ERROR
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../login.php?msg=sqlError");
        exit();
    } else {
        // BIND AND EXECUTE STATEMENT
        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // MATCH USERPASSWORD FROM THE DATABASE
            $psw_check = password_verify($password, $row['pwd']);
            if ($psw_check === FALSE) {
                header("location: ../../login.php?msg=wrongPwd");
                exit();
            } else if ($psw_check === TRUE) {
                session_start();
                $_SESSION['userId'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("location: ../../login.php?msg=loginSuccess");
                exit();
            } else {
                header("location: ../../login.php?msg=wrongPwd");
                exit();
            }
        } else {
            header("location: ../../login.php?msg=usernameOrPwdIncorrect");
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
