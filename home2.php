<?php
    session_start();

    if(!isset($_SESSION["id"])){
        header("location:./index.php");
        exit();
    }
    
    if($_SESSION['cargo'] != 'admin'){
        header("location:./index.php");
    }
?>

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
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>TITULO</th>
                    <th>GENERO</th>
                    <th>SINOPSE</th>
                    <th>ATORES</th>
                    <th>DURAÇÃO</th>
                    <th>ANO LANÇAMENTO</th>
                    <th>IMAGEM</th>
                    <th>TRAILLER</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    require_once("list-filmesbd.php");
                    if($retornoDados > 0)
                    {
                        foreach($dados as $linha){
                        ?>
                <tr>
                    <td align=center><?= $linha->IDfilme ?></td>
                    <td align=center><?= $linha->tituloFilme ?></td>
                    <td align=center><?= $linha->generoFilme ?></td>
                    <td align=center><?= $linha->sinopseFilme ?></td>
                    <td align=center><?= $linha->atoresFilme ?></td>
                    <td align=center><?= $linha->duracaoFilme ?></td>
                    <td align=center><?= $linha->lancamentoFilme ?></td>
                    <td align=center>
                        <img src="./imagens/<?= $linha->imagemFilme ?>">
                    </td>
                    <td align=center><?= $linha->traillerFilme ?></td>
                    <td class="t-img">
                        <a href="./edit-filme.php?id=<?=$linha->IDfilme?>">
                            <img src="./img/editing.png" alt="Editar">
                        </a>
                    </td>
                    <td class="t-img">
                        <a href="./exc-filme.php?id=<?=$linha->IDfilme?>">
                            <img src="./img/trash.png" alt="Excluir">
                        </a>
                    </td>
                </tr>
                    <?php
                            }
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>