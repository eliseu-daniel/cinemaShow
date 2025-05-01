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

        require_once("list-filmeSelect.php");
            if($retornoDados > 0)
            {
                foreach($dados as $linha){
    ?>
    <div class="filme">

        <div class="imagem">
            <img src="./imagens/<?= $linha->imagemFilme ?>" alt="">
        </div>
        <div class="principal">
            <h2 align=center><?= $linha->tituloFilme ?></h2>    
            <h3>Sinopse:</h3>
            <p><?= $linha->sinopseFilme?></p>
            <h3>Genero:</h3>
            <p><?= $linha->generoFilme?></p>
            <h3>Atores:</h3>
            <p><?= $linha->atoresFilme?></p>
            <h3>Duração:</h3>
            <p><?= $linha->duracaoFilme?></p>
            <h3>Ano de Lançamento:</h3>
            <p><?= $linha->lancamentoFilme?></p>
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
            }
        }
        ?>
    </div>
</body>
</html>