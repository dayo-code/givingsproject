<?php

include "user.php";
$obj = new Admin;
$obj->category_add($_POST['catname']);



?>