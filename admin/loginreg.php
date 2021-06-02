<?php


if ($_POST) {
    require "user.php";
    $log_obj = new Admin;
    
    $mail = strip_tags(trim($_POST['email']));
    $pass = strip_tags($_POST['password']);

    $logged = $log_obj->login($mail, $pass);

    if ($logged > 0) {
        $_SESSION['userid'] = $logged;
        header('location:home.php?msg=Succesfully logged in');
    }else{
      header('location:login.php');
    }
}else {
  header('location:index.php');
}


?>
