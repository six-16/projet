<?php
class Model {
    private static $pdo = null;

    public static function getPDO() {
        if (self::$pdo === null) {
            try {
                // Configuration pour le serveur dev-isi.utt.fr
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=miemouny;charset=utf8',
                    'miemouny',
                    'fBFR17oP',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>