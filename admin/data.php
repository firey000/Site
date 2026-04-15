<?php
require '../config.php';
$name_product = $_POST['name'];
$price_product = $_POST['price'];
$description_product = $_POST['description'];
$img_product = $_FILES['img'];

$newFileName = $img_product['name'];

move_uploaded_file($img_product['tmp_name'], "../image/$newFileName");

$connect -> query("INSERT INTO 'products'('name, 'price', 'description', 'img') 
VALUES ('$name_product', '$price_product', '$description_product', '$newFileName')");

echo 'все получилось';
?>