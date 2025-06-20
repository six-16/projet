<?php
require_once '../model/ModelConnexion.php';

class ControllerConnexion {
    public static function login() {
        include 'config.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            $user = ModelConnexion::checkCredentials($login, $password);
            
            if ($user) {
                $_SESSION['login_id'] = $user['id'];
                $_SESSION['login_nom'] = $user['nom'];
                $_SESSION['login_prenom'] = $user['prenom'];
                $_SESSION['roles'] = [
                    'responsable' => $user['role_responsable'],
                    'examinateur' => $user['role_examinateur'],
                    'etudiant' => $user['role_etudiant']
                ];
                
                // Redirection selon le rôle
                if ($user['role_responsable']) {
                    header('Location: router2.php?action=responsablelistProjets');
                } elseif ($user['role_examinateur']) {
                    header('Location: router2.php?action=examinateurlistProjets');
                } elseif ($user['role_etudiant']) {
                    header('Location: router2.php?action=etudiantlistRendezVous');
                }
                exit();
            } else {
                $error = "Identifiants incorrects";
            }
        }
        require '../view/connexion/login.php';
    }

    public static function logout() {
        include 'config.php';
        session_unset();
        session_destroy();
        header('Location: router2.php');
        exit();
    }

    public static function register() {
        include 'config.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $roles = [
                'responsable' => isset($_POST['role_responsable']) ? 1 : 0,
                'examinateur' => isset($_POST['role_examinateur']) ? 1 : 0,
                'etudiant' => isset($_POST['role_etudiant']) ? 1 : 0
            ];
            
            // Validation des données
            if (empty($nom) || empty($prenom) || empty($login) || empty($password)) {
                $error = "Tous les champs sont obligatoires";
            } elseif (!array_filter($roles)) {
                $error = "Au moins un rôle doit être sélectionné";
            } else {
                $success = ModelConnexion::registerUser(
                    $nom, 
                    $prenom, 
                    $login, 
                    $password, 
                    $roles['responsable'],
                    $roles['examinateur'],
                    $roles['etudiant']
                );
                
                if ($success) {
                    header('Location: router2.php?action=login');
                    exit();
                } else {
                    $error = "Erreur lors de l'inscription (login peut-être déjà utilisé)";
                }
            }
        }
        require '../view/connexion/inscription.php';
    }
}
?>