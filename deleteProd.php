<?php
require './assets/include/db.inc.php';

$target_file = "";
$product_table = 'bestSeller';

//SQL
$stmt = $conn->prepare("DELETE FROM $product_table WHERE location = ?;");
$stmt->bind_param("s", $product_loc);

// GATHER DATA FROM FORM
$product_loc = $_GET['img'];
$stmt->execute();
$stmt->free_result();

$product_table = 'latestCollection';
$stmt = $conn->prepare("DELETE FROM $product_table WHERE location = ?;");
$stmt->bind_param("s", $product_loc);
$stmt->execute();

echo 'Product successfully removed.';
