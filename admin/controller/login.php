<?php
require_once __DIR__.'/../../config/db.php';
require_once __DIR__.'/../models/login.php';
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['identification'];
    $password = $_POST['password'];

    login::init($pdo);
    $response = login::iniciar($usuario, $password);

    if ($response['success']) {
        $user = $response['data'];

        $_SESSION['usuarioId'] = $user['usuarioId'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['apellidos'] = $user['apellidos'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['cedula'] = $user['cedula'];
        $_SESSION['fecha_creacion'] = $user['fecha_creacion'];
        $_SESSION['estadoId'] = $user['estadoId'];

        echo json_encode(['success' => true, 'redirect' => 'index.php']);
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
        exit;
    }
}


