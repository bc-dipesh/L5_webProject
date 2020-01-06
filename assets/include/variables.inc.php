<?php
// IMPORTANT VARIABLES
$msg = "";
$product_id = 0;
$product_loc = "";
$product_name = "";
$product_price = "";
$product_desc = "";
$product_table = "";
$queryString = "";
$fav_arr = array();

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}

$queryString = "";
if (!empty($_SERVER['QUERY_STRING']) && ($title === 'B.C. Store | Product') || ($title === 'edit.php')) {
    $queryString = $_SERVER['QUERY_STRING'];
    parse_str($queryString, $data);
    $product_loc = $data['img'];
    $product_name = $data['title'];
    $product_price = $data['price'];
    $product_desc = $data['desc'];
}

$successIcon = "<ion-icon name='checkmark' class='wow rollIn'></ion-icon>";
$errorIcon = "<ion-icon name='close' class='wow rollIn'></ion-icon>";
$adminIcon = "<ion-icon name='person' class='wow rollIn'></ion-icon>";
