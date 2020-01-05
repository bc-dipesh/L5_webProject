<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$DBName = "bcshop";

// CONNECT DATABASE
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $DBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
