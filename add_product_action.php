<?php
require_once "Product.php";
$product = new Product($_POST['item_code'], $_POST['item_des'], $_POST['unit_price'], $_POST['discount']);


$product->addProduct();
header('location:list_product.php');