<?php
    session_start();

    $idFilme = filter_input(INPUT_POST, "idFilme", FILTER_SANITIZE_NUMBER_INT);
    $idUser = filter_input(INPUT_POST, "idUser", FILTER_SANITIZE_NUMBER_INT);
    $fav = 1;

    echo($idFilme . $idUser . $fav);

    try {
        require_once('./conexao/conexao.php');

        $sql = "UPDATE filmes SET favFilme = :fav, IDuser = :idU WHERE IDfilme = :id";


        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(":fav", $fav);
        $stmt->bindParam(":idU", $idUser);
        $stmt->bindParam(":id", $idFilme);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            header("location:./filme.php?id=$idFilme");
            exit();
        }else{
            print "<script>alert('Erro ao salvar favorito'); 
            setTimeout(function(){ window.location.href='./filme.php?id=$idFilme';
             }, 100);</script>";
            exit();
        }

    } catch (PDOException $e) {
        echo ("Erro na abertura da gravação dos dados no banco");
    }