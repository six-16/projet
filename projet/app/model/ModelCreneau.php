<?php
require_once 'Model.php';

class ModelCreneau {
    
    public static function getByExaminateur($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM creneau WHERE examinateur = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function getByProjetAndExaminateur($projetId, $examinateurId) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM creneau WHERE projet = ? AND examinateur = ?");
        $stmt->bind_param("ii", $projetId, $examinateurId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function addCreneau($projet, $examinateur, $datetime) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO creneau (projet, examinateur, creneau) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $projet, $examinateur, $datetime);
        return $stmt->execute();
    }
}
?>
