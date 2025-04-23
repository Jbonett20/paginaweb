<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "u436126506_gb_consultores";
$password = "gb*2025#&Consultores";
$dbname = "u436126506_gb_database";

// Establecer cabeceras para respuesta JSON
header('Content-Type: application/json');

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Validar datos requeridos
if (empty($nombre) || empty($apellidos) || empty($telefono) || empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Todos los campos son requeridos']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'El email no es válido']);
    exit;
}

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar consulta SQL
    $stmt = $conn->prepare("INSERT INTO gb_suscriptores (nombre, apellidos, telefono, email) 
                           VALUES (:nombre, :apellidos, :telefono, :email)");
    
    // Bind parameters
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':email', $email);

    // Ejecutar consulta
    $stmt->execute();

    exit(json_encode(['status' => 'success', 'message' => 'Suscripción registrada correctamente']));

} catch(PDOException $e) {
    if ($e->getCode() == 23000) { // Error de duplicado (email único)
        echo json_encode(['status' => 'error', 'message' => 'Este email ya está registrado']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar la suscripción: ' . $e->getMessage()]);
    }
}

$conn = null;
?>
