<?php
class citas {
    private static $pdo;

    public static function init($connection) {
        self::$pdo = $connection;
    }

    public static function listar() {
        try {
            $sql = "SELECT * FROM contactos ORDER BY fecha_creacion DESC";
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute();
            $contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $contactos;

        } catch (PDOException $e) {
            return ['error' => 'Error al listar citas: ' . $e->getMessage()];
        }
    }
    public static function marcarComoAtendido($id) {
        try {
            $sql = "UPDATE contactos SET estado = 2 WHERE id = :id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            if ($stmt->rowCount() > 0) {
                return ['success' => true, 'message' => 'Cita marcada como atendida'];
            } else {
                return ['success' => false, 'message' => 'No se pudo actualizar el estado'];
            }
    
        } catch (PDOException $e) {
            return ['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()];
        }
    }
    
}
?>
