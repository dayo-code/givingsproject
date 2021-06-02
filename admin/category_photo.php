<?php

    
include "user.php";

        $obj = new Admin;
        $obj->catPhoto($_FILES, $_POST['id']);
    






?>