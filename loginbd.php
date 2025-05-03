<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        require_once("./conexao/conexao.php");

        $sql = "SELECT * FROM users WHERE emailUser = :email";

        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(":email", $usuario);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch(PDO::FETCH_OBJ);

            if(password_verify($senha, $dados->senhaUser)){
                session_start();

                $_SESSION["id"] = $dados->IDuser;
                $_SESSION["cargo"] = $dados->cargoUser;

                if($dados->cargoUser == "admin"){
                    header("location:./home2.php");
                    exit();
                }else{
                    header("location:./home.php");
                    exit();
                }
            }else{
                print "<script>alert('Senha incorreta'); setTimeout(function(){ window.location.href='./index.php'; }, 100);</script>";
                exit();
            }
        }else{
            print "<script>alert('E-mail incorreto'); 
            setTimeout(function(){ window.location.href='./index.php'; }, 100);</script>";
            exit();
        }
    }