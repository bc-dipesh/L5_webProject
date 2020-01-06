<?php
require './db.inc.php';

$target_file = "";
$product_table = $_POST['prod-table'];

//SQL
if (isset($_POST['prod-image'])) {
    $stmt = $conn->prepare("INSERT INTO $product_table (location, name, price, description) VALUES (?, ?, ?, ?);");
    $stmt->bind_param("ssds", $product_loc, $product_name, $product_price, $product_desc);

    // Check if image file is a actual image or fake image
    if (isset($_POST["prod-upload-submit"])) {
        $check = getimagesize($_FILES["prod-image"]["tmp_name"]);
        if ($check !== false) {

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if ($product_table === "bestSeller") {
                $target_dir = "./images/bestSeller/";
                $filename = basename($_FILES["prod-image"]["name"]);
                $target_file = $target_dir . $filename;
            } else {
                $target_dir = "./images/latestCollection/";
                $filename = basename($_FILES["prod-image"]["name"]);
                $target_file = $target_dir . $filename;
            }
            $uploadOk = 1;
            echo "Product is successfully added to the database.";
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // GATHER DATA FROM FORM
    $product_name = $_POST['prod-name'];
    $product_loc = $target_file;
    $product_desc = $_POST['prod-desc'];
    $product_price = $_POST['prod-price'];
    $stmt->execute();
} else if (!isset($_POST['prod-image'])) {
    $stmt = $conn->prepare("UPDATE $product_table SET name = ?, price = ?, description = ? WHERE location = ?;");
    $stmt->bind_param("sdss", $product_name, $product_price, $product_desc, $product_location);

    // GATHER DATA FROM FORM
    $product_name = $_POST['prod-name'];
    $product_desc = $_POST['prod-desc'];
    $product_price = $_POST['prod-price'];
    $product_location = $_POST['img'];
    $stmt->execute();
    echo "Product successfully updated.";
}
