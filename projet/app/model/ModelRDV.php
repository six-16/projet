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
    public static function getPlanningByProjet($projetId) {
    $db = self::getPdo();
    $stmt = $db->prepare("
        SELECT EX.nom AS examinateur_nom, EX.prenom AS examinateur_prenom,
               ET.nom AS etudiant_nom, ET.prenom AS etudiant_prenom,
               C.creneau
        FROM rdv R
        JOIN creneau C ON R.creneau = C.id
        JOIN personne ET ON R.etudiant = ET.id
        JOIN personne EX ON C.examinateur = EX.id
        WHERE C.projet = ?
    ");
    $stmt->bind_param("i", $projetId);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>