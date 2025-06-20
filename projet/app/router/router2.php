<?php
require_once '../controller/config.php';
session_start();


// Activer les erreurs (à désactiver en production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Réinitialisation si demandé
if (isset($_GET['reset'])) {
    unset($_SESSION['login_id']);
    unset($_SESSION['roles']);
}

require_once '../controller/controllerConnexion.php';
require_once '../controller/controllerResponsable.php';
require_once '../controller/controllerExaminateur.php';
require_once '../controller/controllerEtudiant.php';
require_once '../controller/controllerInnovation.php';

// --- Action par défaut
$action = $_GET['action'] ?? 'home';
$roles = $_SESSION['roles'] ?? [];

// Récupération + nettoyage
$query_string = $_SERVER['QUERY_STRING'];
parse_str($query_string, $param);
$action = htmlspecialchars($param["action"] ?? 'home');

switch ($action) {

    // Actions de connexion
    case "login":
    case "logout":
    case "register":
        ControllerConnexion::$action();
        break;
    case "login":
        ControllerConnexion::login();
        break;
    

    // Actions du responsable
    case "addProjet":
    case "ListExaminateurs":
    case "addExaminateur":
    case "listExaminateursProjet":
    case "Planning":
        ControllerResponsable::$action();
        break;

    // Actions de l'examinateur
    case "ListAllCreneaux":
    case "ListCreneauxProjet":
    case "AddCreneau":
    case "AddListCreneaux":
        ControllerExaminateur::$action();
        break;

    // Actions partagées (ListProjets)
    case "ListProjets":
        // Permet aux deux rôles d'accéder à ListProjets
        if (!empty($_SESSION['roles']['responsable'])) {
            ControllerResponsable::ListProjets();
        } elseif (!empty($_SESSION['roles']['examinateur'])) {
            ControllerExaminateur::ListProjets();
        } else {
            echo "<p>Accès non autorisé à ListProjets</p>";
        }
        break;

    // Actions de l'étudiant
    case "ListRendezVous":
    case "PrendreRendezVous":
    case "getCreneauxDisponibles":
        ControllerEtudiant::$action();
        break;

    // Actions d'innovation
    case "innovation":
    case "fonctionOriginale":
    case "ameliorationCode":
        ControllerInnovation::$action();
        break;

    // Redirection par défaut
    default:
        if (isset($_SESSION['login_id'])) {
            $roles = $_SESSION['roles'] ?? [];

            if (!empty($roles['responsable'])) {
                header('Location: router2.php?action=ListProjets');
                exit();
            } elseif (!empty($roles['examinateur'])) {
                header('Location: router2.php?action=ListProjets');
                exit();
            } elseif (!empty($roles['etudiant'])) {
                header('Location: router2.php?action=ListRendezVous');
                exit();
            } else {
                echo "<p>Aucun rôle détecté pour cet utilisateur.</p>";
                require '../view/connexion/login.php';
            }
        } else {
            require '../view/connexion/login.php';
        }
        break;
}
?>