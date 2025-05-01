<?php

$dns = "mysql:host=localhost;dbname=filmes;charset=utf8";
$user = "root";
$pass = "";

try {
    $conexao = new PDO($dns, $user, $pass);
} catch (Exception $e) {
    echo ("Erro na conexao com o banco de dados");
    echo ($e->getCode());
    echo($e->getMessage());
}