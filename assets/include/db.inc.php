<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$DBName = "login/signup";

// CONNECT DATABASE
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $DBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
