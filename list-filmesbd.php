<?php
    require_once('./conexao/conexao.php');
    try{
        $sql = "SELECT * FROM filmes";

        $stmt = $conexao->query($sql);

        $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

        $retornoDados = $stmt->rowCount();
    } catch (PDOException $e) {
    echo("Entre em contato com o suporte");
}