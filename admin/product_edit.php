<?php 

include "user.php";

$name = strip_tags(trim($_POST['name']));
$cat = strip_tags($_POST['category']);
$price = (float)$_POST['price'];
$desc = strip_tags(trim($_POST['description']));
$brand = strip_tags(trim($_POST['brand']));
$id = strip_tags(trim($_POST['id']));

$obj = new Admin;
$obj->editProduct($name, $price, $desc, $brand, $cat, $id);

?>