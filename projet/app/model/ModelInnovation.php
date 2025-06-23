<?php
require_once 'Model.php';

class ModelInnovation {
    public static function getProjectStatistics() {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT 
                        p.label as projet,
                        COUNT(DISTINCT c.examinateur) as nb_examinateurs,
                        COUNT(DISTINCT r.etudiant) as nb_etudiants,
                        COUNT(DISTINCT c.id) as nb_creneaux,
                        COUNT(DISTINCT r.id) as nb_rdv
                    FROM projet p
                    LEFT JOIN creneau c ON p.id = c.projet
                    LEFT JOIN rdv r ON c.id = r.creneau
                    GROUP BY p.id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getMostPopularExaminers() {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT 
                        p.nom,
                        p.prenom,
                        COUNT(DISTINCT c.projet) as nb_projets,
                        COUNT(DISTINCT r.id) as nb_rdv
                    FROM personne p
                    JOIN creneau c ON p.id = c.examinateur
                    LEFT JOIN rdv r ON c.id = r.creneau
                    WHERE p.role_examinateur = 1
                    GROUP BY p.id
                    ORDER BY nb_rdv DESC
                    LIMIT 5";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getBusiestDays() {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT 
                        DATE(c.creneau) as date,
                        COUNT(r.id) as nb_rdv
                    FROM creneau c
                    LEFT JOIN rdv r ON c.id = r.creneau
                    GROUP BY DATE(c.creneau)
                    ORDER BY nb_rdv DESC
                    LIMIT 5";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>