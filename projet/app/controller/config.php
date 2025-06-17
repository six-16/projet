<?php
class Database {
    private static $db;

    public static function getConnection() {
        if (!self::$db) {
            self::$db = new mysqli('localhost', 'root', '', 'projet');
            if (self::$db->connect_error) {
                die("Connexion échouée : " . self::$db->connect_error);
            }
        }
        return self::$db;
    }
}
// test
?>