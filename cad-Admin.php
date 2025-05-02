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
        include('./_menu1.php');
        ?>
    <div class="cadAdm">
        <h2>CADASTRAR ADMINISTRADOR</h2>
        <form action="cad-Adminbd.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo" placeholder="Cargo">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>