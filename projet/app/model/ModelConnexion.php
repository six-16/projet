<?php
require_once 'Model.php';

class ModelConnexion {
    public static function checkCredentials($login, $password) {
        try {
            $pdo = Model::getPDO();
            $sql = "SELECT * FROM personne WHERE login = :login AND password = :password";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function registerUser($nom, $prenom, $login, $password, $role_responsable, $role_examinateur, $role_etudiant) {
        try {
            $pdo = Model::getPDO();
            
            // Vérifier si le login existe déjà
            $sql = "SELECT COUNT(*) as count FROM personne WHERE login = :login";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result['count'] > 0) {
                return false;
            }
            
            // Récupérer le prochain ID disponible
            $sql = "SELECT MAX(id) as max_id FROM personne";
            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $next_id = $result['max_id'] + 1;
            
            $sql = "INSERT INTO personne (id, nom, prenom, login, password, 
                    role_responsable, role_examinateur, role_etudiant) 
                    VALUES (:id, :nom, :prenom, :login, :password, 
                    :role_responsable, :role_examinateur, :role_etudiant)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $next_id);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':role_responsable', $role_responsable, PDO::PARAM_INT);
            $stmt->bindParam(':role_examinateur', $role_examinateur, PDO::PARAM_INT);
            $stmt->bindParam(':role_etudiant', $role_etudiant, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>