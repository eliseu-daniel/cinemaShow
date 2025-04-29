<?php
    $email = $_POST['email'];

    if($email == "admin@admin.com"){
        header("location:./home2.php");
    }else{
        header("location:./home.php");
    }