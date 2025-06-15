<?php
require_once 'config.php';

abstract class Model {
    protected static $pdo;

    public static function getPdo() {
        if (!isset(self::$pdo)) {
            self::$pdo = Database::getConnection();
        }
        return self::$pdo;
    }
}
?>

