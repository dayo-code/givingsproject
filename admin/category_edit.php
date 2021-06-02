<?php


include "user.php";
$obj = new Admin;



$des = $obj->category_edit($_POST['edcatname'], $_POST['id']);

?>
