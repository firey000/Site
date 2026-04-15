<?php 
    $conn = new mysqli(
        "localhost",
        "root",
        "0907",
        "Shop"
);
$result = $conn->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);

