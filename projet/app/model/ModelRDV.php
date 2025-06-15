<?php
require_once 'Model.php';

class ModelRDV {
    public static function getByEtudiant($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM rdv WHERE etudiant = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function bookRDV($creneauId, $etudiantId) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO rdv (creneau, etudiant) VALUES (?, ?)");
        $stmt->bind_param("ii", $creneauId, $etudiantId);
        return $stmt->execute();
    }
}
?>