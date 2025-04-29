<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Show</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="login">
        <h1>CINEMA SHOW</h1>
        <h2>Cadastre-se</h2>
        <form action="index.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <label for="senha2">Confirmar Senha</label>
            <input type="password" name="senha2" id="senha2" placeholder="Confirmar Senha">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>