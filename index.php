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
        <form action="loginbd.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <a href="cad-User.php">Cadastre-se</a>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>