<?php

include "user.php";    

$name = strip_tags(trim($_POST['name']));
$price = (float)$_POST['price'];
$desc = strip_tags(trim($_POST['description']));
$brand = strip_tags(trim($_POST['brand']));
$qty = strip_tags(trim($_POST['quantity']));
$cat = strip_tags($_POST['category']);


$obj = new Admin;
$obj->product_add($name, $price, $desc, $brand, $qty, $cat, $_FILES);

// $pic = new Admin;
// $pic->upload($_FILES);


?>