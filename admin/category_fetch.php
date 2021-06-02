<?php
include "user.php";
$obj = new Admin;
$obj->categoryFetch($_POST['select_category']);

?>