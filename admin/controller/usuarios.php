<?php
require_once(__DIR__ . '/../../config/db.php');
require_once(__DIR__ . '/../models/usuarios.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    usuarios::init($pdo);
    $resultado = usuarios::listar();
    echo json_encode($resultado);
    exit;
}
?>
