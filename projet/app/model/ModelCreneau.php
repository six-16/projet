<?php
require_once 'Model.php';

class ModelCreneau {
    public static function creneauList($args) {
        $creneaux = ModelCreneau::getAllInfos();
        include '../view/creneau/list.php';
    }

    public static function getByExaminateur($id) {
         $db = self::getPdo();
    $stmt = $db->prepare("
        SELECT DISTINCT personne.nom, personne.prenom
        FROM creneau
        JOIN personne ON creneau.examinateur = personne.id
        WHERE creneau.projet = ?
    ");
    $stmt->bind_param("i", $projetId);
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
    public static function getAllWithDetails() {
        $db = self::getPdo();
        $query = "SELECT * FROM infocreneaux";
        $result = $db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>
