<?php
    session_start();

    if($_SESSION['cargo'] != 'admin'){
        header("location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar filme</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 align=center>CINEMA SHOW</h1>
    <?php 
        include('./_menu1.php');
    ?>
    <h2 align=center>EDITAR FILME</h2>
    <div class="duplo">
        <form action="./edit-filmebd.php" method="post" enctype="multipart/form-data">
        <?php

                    $idFilme = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
                    require_once("list-filmeSelect.php");
                    if($retornoDados > 0)
                    {
                        foreach($dados as $linha){
        ?>
            <input type="hidden" name="id" value="<?= $idFilme ?>">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" value="<?= $linha->tituloFilme ?>">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero"  value= "<?= $linha->generoFilme ?>">
            <label for="sinopse">Sinopse</label>
            <textarea name="sinopse" id="sinopse"> <?= $linha->sinopseFilme ?></textarea>
            <label for="atores">Atores</label>
            <textarea name="atores" id="atores"> <?= $linha->atoresFilme ?></textarea>
            <label for="duracao">Duração</label>
            <input type="number" name="duracao" id="duracao" value= "<?= $linha->duracaoFilme ?>">
            <label for="lancamento">Ano de Lançamento</label>
            <input type="number" name="lancamento" id="lancamento" value= "<?= $linha->lancamentoFilme ?>">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem">
            <label for="trailer">Trailler</label>
            <input type="text" name="trailer" id="trailer" value= "<?= $linha->traillerFilme ?>">
            <?php
                            }
                        }
                    ?>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>