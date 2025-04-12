<?php
require_once(__DIR__.'/../../config/db.php');

class login {
    private static $pdo;

    public static function init($connection) {
        self::$pdo = $connection;
    }

    public static function iniciar($identification, $password) {
        try {
            $sql = "SELECT * FROM gb_usuarios WHERE cedula = :cedula LIMIT 1";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':cedula', $identification);

            if ($stmt->execute()) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user && password_verify($password, $user['password'])) {
                    return ['success' => true, 'data' => $user];
                } else {
                    return ['success' => false, 'message' => 'Usuario o contraseña incorrectos'];
                }
            } else {
                return ['success' => false, 'message' => 'Error al ejecutar la consulta'];
            }

        } catch(PDOException $e) {
            return ['success' => false, 'message' => 'Error DB: '.$e->getMessage()];
        }
    }
}

