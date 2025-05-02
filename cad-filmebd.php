<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo   = filter_input(INPUT_POST, "titulo"    , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $genero   = filter_input(INPUT_POST, "genero"    , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $sinopse  = filter_input(INPUT_POST, "sinopse"   , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $atores   = filter_input(INPUT_POST, "atores"    , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $duracao  = filter_input(INPUT_POST, "duracao"   , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ano      = filter_input(INPUT_POST, "lancamento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $trailler = filter_input(INPUT_POST, "trailer"   , FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (!empty($_FILES["imagem"]["name"])) {
            $nomeOriginal = str_replace(" ", "_", $_FILES["imagem"]["name"]);
            $foto = uniqid()."_".$nomeOriginal;

            $extensao = pathinfo($foto, PATHINFO_EXTENSION);
            $foto = $foto.".".$extensao;
        }else{
            print "<script>alert('Insira uma imagem');</script>";
        }

        echo("1 = $titulo  ");
        echo("2  =  $genero  ");
        echo("3  =  $sinopse ");
        echo("4  =  $atores  ");
        echo("5  =  $duracao ");
        echo("6  =  $ano     ");
        echo("7  =  $foto    " );
        echo("8  =  $trailler");

        try {
            
            require_once("./conexao/conexao.php");
            $sql = "INSERT INTO filmes(tituloFilme, generoFilme, sinopseFilme, atoresFilme, duracaoFilme, lancamentoFilme, imagemFilme, traillerFilme) VALUES(:titulo, :genero, :sinopse, :atores, :duracao, :ano, :img, :trailler)";
            
            $stmt = $conexao->prepare($sql);
            
            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":sinopse", $sinopse);
            $stmt->bindParam(":atores", $atores);
            $stmt->bindParam(":duracao", $duracao);
            $stmt->bindParam(":ano", $ano);
            $stmt->bindParam(":img", $foto);
            $stmt->bindParam(":trailler", $trailler);            
            
            $stmt->execute();
            
            if($stmt->rowCount() >= 1){
                // header("location: ./home2.php");
                echo( $titulo  );
                echo( $genero  );
                echo( $sinopse );
                echo( $atores  );
                echo( $duracao );
                echo( $ano     );
                echo( $foto     );
                echo( $trailler);


                exit();
            }
        } catch (PDOException $e) {
            echo ("Erro na abertura da gravação dos dados no banco");
        }
    }else{
        echo("Entre em contao com o suporte!");
    }