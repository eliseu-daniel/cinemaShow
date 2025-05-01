<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Show</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 align=center>CINEMA SHOW</h1>
    <?php 
        include('./_menu2.php');

        require_once("list-filmesbd.php");
            if($retornoDados > 0)
            {
                foreach($dados as $linha){
    ?>
    <div class="filme">

        <div class="imagem">
            <img src="./imagens/<?= $dados->imagemFilme ?>" alt="">
        </div>
        <div class="principal">
            <h2>Titulo:</h2>
            <p><?= $dados->tituloFilme ?></p>     
            <h3>Sinopse:</h3>
            <p><?= $dados->sinopseFilme?></p>
            <h3>Genero:</h3>
            <p><?= $dados->generoFilme?></p>
            <h3>Atores:</h3>
            <p><?= $dados->atoresFilme?></p>
            <h3>Duração:</h3>
            <p><?= $dados->duracaoFilme?></p>
            <h3>Ano de Lançamento:</h3>
            <p><?= $dados->lancamentoFilme?></p>
            <h3>Trailler:</h3>
            <iframe width="320" height="240"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            allowfullscreen
        </iframe>
        </div>
        <div class="fav">
            <button>Favorito</button>
        </div>
        <?php
                exit();
            }
        }
        ?>
    </div>
</body>
</html>