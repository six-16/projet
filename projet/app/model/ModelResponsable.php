<?php
require_once 'Model.php';

class ModelResponsable {
    public static function getProjetsByResponsable($responsable_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT * FROM projet WHERE responsable = :responsable_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':responsable_id', $responsable_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function addProjet($label, $groupe, $responsable_id) {
        try {
            $pdo = Model::getPDO();
            
            // Récupérer le prochain ID disponible
            $sql = "SELECT MAX(id) as max_id FROM projet";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $next_id = $result['max_id'] + 1;
            
            $sql = "INSERT INTO projet (id, label, groupe, responsable) 
                    VALUES (:id, :label, :groupe, :responsable)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $next_id);
            $stmt->bindParam(':label', $label);
            $stmt->bindParam(':groupe', $groupe);
            $stmt->bindParam(':responsable', $responsable_id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getAllExaminateurs() {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT * FROM personne WHERE role_examinateur = 1";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function addExaminateur($nom, $prenom, $login, $password) {
        try {
            $pdo = Model::getPDO();
            
            // Récupérer le prochain ID disponible
            $sql = "SELECT MAX(id) as max_id FROM personne";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $next_id = $result['max_id'] + 1;
            
            $sql = "INSERT INTO personne (id, nom, prenom, login, password, role_examinateur) 
                    VALUES (:id, :nom, :prenom, :login, :password, 1)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $next_id);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':password', $password);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }


public static function getExaminateursByProjet($projet_id) {
    try {
        $pdo = Model::getPDO();
        $sql = "SELECT DISTINCT p.id, p.nom, p.prenom 
                FROM personne p
                JOIN creneau c ON p.id = c.examinateur
                WHERE c.projet = :projet_id AND p.role_examinateur = 1
                ORDER BY p.nom, p.prenom";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':projet_id', $projet_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Loguer l'erreur si nécessaire
        error_log("Erreur dans getExaminateursByProjet: " . $e->getMessage());
        return false;
    }
}

    public static function getRendezVousByProjet($projet_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT i.rdv_id, i.projet_label, i.examinateur_nom, i.examinateur_prenom, 
                    i.creneau, i.etudiant_nom, i.etudiant_prenom
                    FROM infordv i
                    WHERE i.projet_id = :projet_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':projet_id', $projet_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>