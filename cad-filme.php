<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar filme</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 align=center>CINEMA SHOW</h1>
    <?php 
        include('./_menu1.php');
    ?>
    <div class="duplo1">
        <h2 align=center>CADASTRAR FILME</h2>
        <div class="duplo">
            <form action="cad-filmebd.php" method="post" enctype="multipart/form-data">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">
                <label for="genero">Genero</label>
                <input type="text" name="genero" id="genero">
                <label for="sinopse">Sinopse</label>
                <textarea name="sinopse" id="sinopse"></textarea>
                <label for="atores">Atores</label>
                <textarea name="atores" id="atores"></textarea>
                <label for="duracao">Duração</label>
                <input type="number" name="duracao" id="duracao">
                <label for="lancamento">Ano de Lançamento</label>
                <input type="number" name="lancamento" id="lancamento">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem">
                <label for="trailer">Trailler</label>
                <input type="text" name="trailer" id="trailer">
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>