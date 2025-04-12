<?php
// Configuración básica
header('Content-Type: application/json');
// Desactivar reporte de errores para producción
error_reporting(0);
ini_set('display_errors', 0);
/* over */
// Verificar método HTTP
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Cargar dependencias
require_once __DIR__.'/../../config/db.php';
require_once __DIR__.'/../models/contact.php';

try {
    // Verificar conexión a BD
    if (!isset($pdo)) {
        throw new Exception('Error de conexión a la base de datos');
    }
    
    // Inicializar modelo
    citas::init($pdo);

    // Validar campos requeridos
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios']);
        exit;
    }

    // Procesar y sanitizar datos
    $nombre = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $asunto = isset($_POST['subject']) ? htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8') : 'Sin asunto';
    $mensaje = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    // Crear contacto
    $resultado = citas::crear($nombre, $email, $asunto, $mensaje);
    
    // Interceptar y limpiar completamente la salida
    ob_start();
    $jsonResponse = json_encode($resultado);
    header_remove(); // Limpiar todos los headers anteriores
    http_response_code($resultado['success'] ? 200 : 500);
    header('Content-Type: application/json');
    header('Content-Length: '.strlen($jsonResponse));
    header('Cache-Control: no-cache, must-revalidate');
    ob_end_clean(); // Descartar cualquier salida no deseada
    
    // Validar y enviar solo el JSON
    if ($resultado['success']) {
        echo json_encode($resultado);
        exit;
    }
     else {
        exit(json_encode(['success'=>false, 'message'=>'Error interno']));
    }
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error: '.$e->getMessage()]);
    exit;
}
