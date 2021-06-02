<?php
include "admin/user.php";
$obj = new Admin;

$prod =$obj->get_products();
require 'header.php';


# add products in cart 
if(isset($_POST["prod_id"])) {
	foreach($_POST as $key => $value){
		$product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}	
	$statement = $conn->prepare("SELECT product_name, product_price FROM products WHERE prod_id=? LIMIT 1");
	$statement->bind_param('s', $product['prod_id']);
	$statement->execute();
	$statement->bind_result($product_name, $product_price);
	while($statement->fetch()){ 
		$product["prod_name"] = $product_name;
		$product["prod_price"] = $product_price;		
		if(isset($_SESSION["products"])){ 
			if(isset($_SESSION["products"][$product['prod_id']])) {				
				$_SESSION["products"][$product['prod_id']]["prod_quantity"] 
= $_SESSION["products"][$product['prod_id']]["prod_quantity"] + $_POST["prod_quantity"];				
			} else {
				$_SESSION["products"][$product['prod_id']] = $product;
			}			
		} else {
			$_SESSION["products"][$product['prod_id']] = $product;
		}	
	}	
 	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}

# Remove products from cart
if(isset($_GET["remove_code"]) && isset($_SESSION["products"])) {
	$product_code  = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING);
	if(isset($_SESSION["products"][$product_code]))	{
		unset($_SESSION["products"][$product_code]);
	}	
 	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}
# Update cart product quantity
if(isset($_GET["update_quantity"]) && isset($_SESSION["products"])) {	
	if(isset($_GET["quantity"]) && $_GET["quantity"]>0) {		
		$_SESSION["products"][$_GET["update_quantity"]]["prod_quantity"] = $_GET["quantity"];	
	}
	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}	