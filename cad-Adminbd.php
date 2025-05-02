<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cargo = 'admin';

        try {
            
            require_once("./conexao/conexao.php");
            $sql = "INSERT INTO users (nomeUser,emailUser,senhaUser,cargoUser) VALUES (:name, :email, :senha, :cargo)";
            
            $stmt = $conexao->prepare($sql);
            
            $stmt->bindParam(":name", $nome);
            $stmt->bindParam(":email", $email);
            $cript = password_hash($senha, PASSWORD_DEFAULT);
            $stmt->bindParam(":senha", $cript);
            $stmt->bindParam(":cargo", $cargo);
            
            $stmt->execute();
            
            if($stmt->rowCount() >= 1){
                header("location: ./home2.php");
                exit();
            }
        } catch (PDOException $e) {
            echo ("Erro na abertura da gravação dos dados no banco");
        }
    }else{
        echo("Entre em contao com o suporte!");
    }