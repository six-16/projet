<?php
require_once 'Model.php';

class ModelEtudiant {
    public static function getRendezVousByEtudiant($etudiant_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT i.rdv_id, i.projet_label, i.examinateur_nom, i.examinateur_prenom, 
                    i.creneau 
                    FROM infordv i
                    WHERE i.etudiant_id = :etudiant_id
                    ORDER BY i.creneau";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':etudiant_id', $etudiant_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getProjetsDisponibles() {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT DISTINCT p.id, p.label 
                    FROM projet p
                    JOIN creneau c ON p.id = c.projet
                    LEFT JOIN rdv r ON c.id = r.creneau
                    WHERE r.id IS NULL";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getCreneauxDisponiblesByProjet($projet_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT c.id, c.creneau, p.nom as examinateur_nom, p.prenom as examinateur_prenom
                    FROM creneau c
                    JOIN personne p ON c.examinateur = p.id
                    LEFT JOIN rdv r ON c.id = r.creneau
                    WHERE c.projet = :projet_id AND r.id IS NULL
                    ORDER BY c.creneau";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':projet_id', $projet_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function addRendezVous($creneau_id, $etudiant_id) {
        try {
            $pdo = Model::getPDO();
            
            // Récupérer le prochain ID disponible
            $sql = "SELECT MAX(id) as max_id FROM rdv";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $next_id = $result['max_id'] + 1;
            
            $sql = "INSERT INTO rdv (id, creneau, etudiant) 
                    VALUES (:id, :creneau, :etudiant)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $next_id);
            $stmt->bindParam(':creneau', $creneau_id);
            $stmt->bindParam(':etudiant', $etudiant_id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function hasAlreadyRdvForProjet($etudiant_id, $projet_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT COUNT(*) as count 
                    FROM rdv r
                    JOIN creneau c ON r.creneau = c.id
                    WHERE r.etudiant = :etudiant_id AND c.projet = :projet_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':etudiant_id', $etudiant_id);
            $stmt->bindParam(':projet_id', $projet_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['count'] > 0;
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getProjetIdByCreneau($creneau_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT projet FROM creneau WHERE id = :creneau_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':creneau_id', $creneau_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['projet'];
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>