<?php
require_once 'Model.php';

class ModelProjet {
    public static function getByResponsable($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM projet WHERE responsable = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function addProjet($label, $responsable, $groupe) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO projet (label, responsable, groupe) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $label, $responsable, $groupe);
        return $stmt->execute();
    }

    public static function getAll() {
        $db = Database::getConnection();
        $result = $db->query("SELECT * FROM projet");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>