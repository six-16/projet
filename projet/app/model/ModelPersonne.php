<?php
require_once 'Model.php';

class ModelPersonne {
    public static function getByLogin($login, $password) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM personne WHERE login = ? AND password = ?");
        $stmt->bind_param("ss", $login, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
    public static function add($nom, $prenom, $login, $password, $respo, $examin, $etud) {
        $db = self::getPdo();
        $stmt = $db->prepare("INSERT INTO personne (nom, prenom, role_responsable, role_examinateur, role_etudiant, login, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiiss", $nom, $prenom, $respo, $examin, $etud, $login, $password);
        return $stmt->execute();
    }


    public static function getExaminateurs() {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM personne WHERE role_examinateur = true");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function addExaminateur($nom, $prenom) {
        $db = Database::getConnection();
        $login = strtolower($nom);
        $password = 'secret';
        $stmt = $db->prepare("INSERT INTO personne (nom, prenom, role_responsable, role_examinateur, role_etudiant, login, password) VALUES (?, ?, 0, 1, 0, ?, ?)");
        $stmt->bind_param("ssss", $nom, $prenom, $login, $password);
        return $stmt->execute();
    }
}
?>