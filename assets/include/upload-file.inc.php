<?php
require './db.inc.php';

$target_file = "";
$product_table = $_POST['prod-table'];

//SQL
$stmt = $conn->prepare("INSERT INTO $product_table (id, name, location, price, description) VALUES (?, ?, ?, ?, ?);");
$stmt->bind_param("issds", $product_id, $product_name, $product_loc, $product_price, $product_desc);

// Check if image file is a actual image or fake image
if (isset($_POST["prod-upload-submit"])) {
    $check = getimagesize($_FILES["prod-image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($product_table === "bestSeller") {
            $target_dir = "./images/bestSeller/";
            $target_file = $target_dir . basename($_FILES["prod-image"]["name"]);
            // SAVE FILE IN THE DIRECTORY
            if (move_uploaded_file($_FILES["prod-image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["prod-image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            $target_dir = "./images/latestCollection/";
            $target_file = $target_dir . basename($_FILES["prod-image"]["name"]);
            // SAVE FILE IN THE DIRECTORY
            if (move_uploaded_file($_FILES["prod-image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["prod-image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// GATHER DATA FROM FORM
$product_id = $_POST['prod-id'];
$product_name = $_POST['prod-name'];
$product_loc = $target_file;
$product_desc = $_POST['prod-desc'];
$product_price = $_POST['prod-price'];
$stmt->execute();
