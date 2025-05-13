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

        $sql = "SELECT favFilme FROM filmes WHERE IDfilme = :id AND IDuser = :idUser AND favFilme = 1";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $idFilme);
        $stmt->bindParam(":idUser", $_SESSION["id"]);
        $stmt->execute();
        $isFavorito = $stmt->rowCount() > 0;
    } catch (PDOException $e) {
    echo("Entre em contato com o suporte");
}