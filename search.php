<?php

require './assets/include/db.inc.php';

// GET QUERY STRING
// $queryString = $_GET['q'];
$suggestion = array();

$rawQuery = $_SERVER['QUERY_STRING'];
parse_str($rawQuery, $data);
$queryString = $data['q'];
$table_name = $data['table_name'];
$price_min = $data['price-min'];
$price_max = $data['price-max'];

// GET DATA FROM DATABASE
$sql = "SELECT * FROM $table_name;";
$products = array();

if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $img = $row['location'];
        $title = $row['name'];
        $price = $row['price'];
        $desc = $row['description'];
        $prodQuery = "?img=$img&title=$title&price=$price&desc=$desc";

        if ($queryString !== "") {
            $queryString = strtolower($queryString);
            $len = strlen($queryString);
            if (stristr($title, $queryString)) {
                if ($price <= $price_max && $price >= $price_min) {
                    $suggestion[] = "<div class='container wow fadeInUp'>
                                        <div class='productImage'>
                                            <a href='./product.php$prodQuery'>
                                                <img src='$img' alt='$title'>
                                            </a>
                                        </div>
                                        <div class='price'>
                                            <h4>PRICE</h4>
                                            <span>RS. $price</span>
                                        </div>
                                        <div class='productName'>
                                            $title
                                        </div>
                                    </div>";
                }
            }
        }
    }
}

if (!empty($suggestion)) {
    foreach ($suggestion as $suggestedProd) {
        echo $suggestedProd;
    }
}
