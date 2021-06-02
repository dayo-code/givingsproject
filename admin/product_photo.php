<?php

    
include "user.php";

        $obj = new Admin;
        $obj->updatePhoto($_FILES, $_POST['id']);
    






?>