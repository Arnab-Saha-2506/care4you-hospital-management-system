<?php

    $database= new mysqli("sql105.infinityfree.com","if0_34583585","kVhiAWwrCnLsDh0","if0_34583585_c4u");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>