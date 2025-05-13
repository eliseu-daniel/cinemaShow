<?php
    session_start();

    header('Content-Type: application/json');

    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!isset($data['idFilme']) || !isset($data['idUser']) || !isset($data['fav'])) {
        echo json_encode(['success' => false, 'message' => 'Dados inválidos']);
        exit();
    }

    $idFilme = filter_var($data['idFilme'], FILTER_SANITIZE_NUMBER_INT);
    $idUser = filter_var($data['idUser'], FILTER_SANITIZE_NUMBER_INT);
    $fav = filter_var($data['fav'], FILTER_SANITIZE_NUMBER_INT);

    if ($fav != 0 && $fav != 1) {
        echo json_encode(['success' => false, 'message' => 'Valor de favorito inválido']);
        exit();
    }

    try {
        require_once('./conexao/conexao.php');

        $sql = "UPDATE filmes SET favFilme = :fav, IDuser = :idU WHERE IDfilme = :id";
        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(":fav", $fav);
        $idUserParam = ($fav == 0) ? null : $idUser;
        $stmt->bindParam(":idU", $idUserParam);
        $stmt->bindParam(":id", $idFilme);
        $stmt->execute();

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Erro na gravação dos dados no banco: ' . $e->getMessage()]);
    }

    exit();