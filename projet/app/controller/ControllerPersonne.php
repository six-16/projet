<?php

class ControllerPersonne {
    public static function login() {
        include '../view/personne/connexion.php';
    }

    public static function connect() {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $user = ModelPersonne::getByLogin($login, $password);
        if ($user) {
            $_SESSION['login_id'] = $user['id'];
            $_SESSION['user_name'] = $user['prenom'] . ' ' . $user['nom'];
            $_SESSION['roles'] = [
                'responsable' => $user['role_responsable'],
                'examinateur' => $user['role_examinateur'],
                'etudiant' => $user['role_etudiant'],
            ];
            header('Location: index.php');
        } else {
            echo "<p>Échec de connexion</p>";
            include '../view/personne/connexion.php';
        }
    }

    public static function register() {
        include '../view/personne/login.php';
    }

    public static function registerConfirm() {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $role_responsable = $role === 'responsable' ? 1 : 0;
        $role_examinateur = $role === 'examinateur' ? 1 : 0;
        $role_etudiant = $role === 'etudiant' ? 1 : 0;

        $result = ModelPersonne::add($nom, $prenom, $login, $password, $role_responsable, $role_examinateur, $role_etudiant);
        if ($result) {
            echo "<p>Inscription réussie. Vous pouvez maintenant vous connecter.</p>";
        } else {
            echo "<p>Erreur : Login déjà utilisé.</p>";
        }
        include '../view/personne/connexion.php';
    }

    public static function logout() {
        session_destroy();
        header('Location: index.php');
    }

}

?>