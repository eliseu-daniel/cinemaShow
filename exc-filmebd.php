<?php
    $idFilme = filter_input(INPUT_POST, "id"   , FILTER_SANITIZE_NUMBER_INT);

    try{
        require_once("./conexao/conexao.php");

        $sql = "DELETE FROM filmes WHERE IDfilme = :id";
        $stmt = $conexao->prepare($sql);
        
        $stmt->bindParam(":id", $idFilme);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            header("location:./home2.php");
            exit();
        }
    }catch(PDOException $e){
        echo("Erro ao abrir banco de dados");
    }