<?php
    require_once('./conexao/conexao.php');
    $idFav = $_SESSION['id'];
    try{
        $sql = "SELECT * FROM filmes where IDuser = :id ";

        $stmt = $conexao->prepare($sql);

        $params = [':id' => $idFav];

        $stmt->execute($params);

        $dados2 = $stmt->fetchAll(PDO::FETCH_OBJ);

        $retornoDados2 = $stmt->rowCount();
    } catch (PDOException $e) {
    echo("Entre em contato com o suporte");
}