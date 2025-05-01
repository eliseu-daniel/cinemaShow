<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMES</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 align=center>CINEMA SHOW</h1>
    <?php 
        include('./_menu1.php');
    ?>
    <div class="card2">
        <ul>
        <?php
                    require_once("list-filmesbd.php");
                    if($retornoDados > 0)
                    {
                        foreach($dados as $linha){
            ?>
            <li>
                <img src="./imagens/<?= $dados->imagemFilme ?>">
                <h3 align=center><?= $dados->tituloFilme ?></h3>
            </li>
            <?php
                        exit();
                        }
                    }
                ?>
        </ul>
    </div>
</body>
</html>