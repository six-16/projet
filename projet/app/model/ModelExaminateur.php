<?php
require_once 'Model.php';

class ModelExaminateur {
    
    public static function getProjetsByExaminateur($examinateur_id) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT DISTINCT 
                        p.id,
                        p.label, 
                        p.groupe, 
                        per.nom AS responsable_nom, 
                        per.prenom AS responsable_prenom
                    FROM projet p
                    JOIN personne per ON p.responsable = per.id
                    JOIN creneau c ON c.projet = p.id
                    WHERE c.examinateur = :examinateur_id;
                    ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':examinateur_id', $examinateur_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }


public static function getAllCreneauxByExaminateur($examinateur_id) {
    try {
        $pdo = Model::getPDO();
        $sql = "SELECT c.id, p.label as projet_label, c.creneau
                FROM creneau c
                JOIN projet p ON c.projet = p.id
                WHERE c.examinateur = :examinateur_id
                ORDER BY c.creneau";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':examinateur_id', $examinateur_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Debug: vérifiez ce que retourne la requête
        error_log("Creneaux trouvés: " . print_r($result, true));
        
        return $result;
    } catch (PDOException $e) {
        error_log("Erreur dans getAllCreneauxByExaminateur: " . $e->getMessage());
        return [];
    }
}
    
    
    public static function getCreneauxByProjetAndExaminateur($projet_id, $examinateur_id) {
    try {
        $pdo = Model::getPDO();
        $sql = "SELECT c.id, c.creneau 
                FROM creneau c
                WHERE c.projet = :projet_id 
                AND c.examinateur = :examinateur_id
                ORDER BY c.creneau";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':projet_id', $projet_id, PDO::PARAM_INT);
        $stmt->bindParam(':examinateur_id', $examinateur_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
    } catch (PDOException $e) {
        error_log("Erreur dans getCreneauxByProjetAndExaminateur: " . $e->getMessage());
        return [];
    }
}



    public static function addCreneau($projet_id, $examinateur_id, $creneau) {
        try {
            $pdo = Model::getPDO();
            
            // Récupérer le prochain ID disponible
            $sql = "SELECT MAX(id) as max_id FROM creneau";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $next_id = $result['max_id'] + 1;
            
            $sql = "INSERT INTO creneau (id, projet, examinateur, creneau) 
                    VALUES (:id, :projet, :examinateur, :creneau)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $next_id);
            $stmt->bindParam(':projet', $projet_id);
            $stmt->bindParam(':examinateur', $examinateur_id);
            $stmt->bindParam(':creneau', $creneau);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>