<?php
    session_start();
    if($_SESSION == true){
        session_destroy();

        header("location:./index.php");
        exit();
    }