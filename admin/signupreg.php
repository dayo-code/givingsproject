<?php
require 'user.php';

$fname = strip_tags(trim($_POST['firstname']));
$lname = strip_tags(trim($_POST['lastname']));
$mail = strip_tags(trim($_POST['email']));
$phone = strip_tags($_POST['phone']);
$pwd = strip_tags(trim($_POST['password']));

$obj_admin = new Admin;

$ad = $obj_admin->register($fname, $lname, $mail, $phone, $pwd);

if ($ad) {
    $_SESSION['userid'] = $ad;
    header('location:home.php?msg=Successfully registered');
}else{
    header('location:signup.php?Please Check your input and try again');
}



?>