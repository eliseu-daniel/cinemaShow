<?php
    session_start();

    if($_SESSION['cargo'] != 'admin'){
        header("location:./index.php");
    }
?>

<div class="menu">
    <ul>
        <li><a href="home2.php">VISUALIZAR</a></li>
        <li><a href="cad-filme.php">CADASTRAR FILME</a></li>
        <li><a href="cad-Admin.php">CADASTRAR ADMIN</a></li>
        <li><a href="index.php">LOGOUT</a></li>
    </ul>
</div>