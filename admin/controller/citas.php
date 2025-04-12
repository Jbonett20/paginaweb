<?php
require_once(__DIR__ . '/../../config/db.php');
require_once(__DIR__ . '/../models/citas.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    citas::init($pdo);
    $resultado = citas::listar();

    echo json_encode($resultado);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['id'])) {
        echo json_encode(['success' => false, 'message' => 'ID no proporcionado']);
        exit;
    }

    citas::init($pdo);
    $resultado = citas::marcarComoAtendido($data['id']);

    echo json_encode($resultado);
    exit;
}

?>
