<?php
require 'User.php';

$fname = strip_tags(trim($_POST['firstname']));
$lname = strip_tags(trim($_POST['lastname']));
$mail = strip_tags(trim($_POST['email']));
$pwd = strip_tags($_POST['password']);
$phone = strip_tags(trim($_POST['phone']));

$obj_user = new User;

$chk = $obj_user->register($fname, $lname, $mail, $pwd, $phone);

if ($chk) {
    $_SESSION['userid'] = $chk;
    header('location:index.php?msg=Successfully registered');
}else{
    header('location:register.php?Please Check your input and try again');
}



?>