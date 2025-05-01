<?php
    require_once('./conexao/conexao.php');
    $idfilme = $_GET['id'];
    try{
        $sql = "SELECT * FROM filmes WHERE IDfilme = :id";

        $stmt = $conexao->prepare($sql);
        $params = [':id' => $idfilme];
        
        $stmt->execute($params);

        $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

        $retornoDados = $stmt->rowCount();
    } catch (PDOException $e) {
    echo("Entre em contato com o suporte");
}