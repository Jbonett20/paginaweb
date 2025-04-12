<?php
class usuarios {
    private static $pdo;

    public static function init($connection) {
        self::$pdo = $connection;
    }

    public static function listar() {
        try {
            $sql = "SELECT * FROM gb_suscriptores ORDER BY fecha_creacion DESC";
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['error' => 'Error al listar usuarios: ' . $e->getMessage()];
        }
    }
}
?>
