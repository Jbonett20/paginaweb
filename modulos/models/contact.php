<?php
require_once(__DIR__.'/../../config/db.php');
/* over */
class citas {
    private static $pdo;

    public static function init($connection) {
        self::$pdo = $connection;
    }

    public static function crear($nombre, $email, $subject, $mensaje) {
        
        try {
            $stmt = self::$pdo->prepare("INSERT INTO contactos (nombre, email, asunto, mensaje) 
                                  VALUES (:nombre, :email, :asunto, :mensaje)");
            
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':asunto', $subject);
            $stmt->bindParam(':mensaje', $mensaje);
            
            if($stmt->execute()) {
                return ['success' => true, 'message' => 'Mensaje enviado correctamente'];
            } else {
                return ['success' => false, 'message' => 'Error al enviar el mensaje'];
            }
        } catch(PDOException $e) {
            return ['success' => false, 'message' => 'Error de base de datos: '.$e->getMessage()];
        }
    }
}
?>
