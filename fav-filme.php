<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMES - FAVORITOS</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 align=center>CINEMA SHOW - FAVORITOS</h1>
    <?php 
        include('./_menu2.php');
    ?>
    <div class="card">
        <ul>
            <?php
                    require_once("fav-filmebd.php");
                    if($retornoDados2 > 0)
                    {
                        foreach($dados2 as $linha){
            ?>
            <li>
                <a href="./filme.php?id=<?= $linha->IDfilme?>">
                    <img src="./imagens/<?= $linha->imagemFilme ?>">
                    <h3 align=center><?= $linha->tituloFilme ?></h3>
                </a>
            </li>
            <?php
                        }
                    }
                ?>
        </ul>
    </div>

    <script src="./js/index.js"></script>
</body>
</html>