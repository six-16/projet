<?php
require_once '../controller/config.php';
session_start();

// Réinitialisation de login_id si demandé
if (isset($_GET['reset'])) {
    unset($_SESSION['login_id']);
    unset($_SESSION['roles']);
}

require_once '../controller/controllerConnexion.php';
require_once '../controller/controllerResponsable.php';
require_once '../controller/controllerExaminateur.php';
require_once '../controller/controllerEtudiant.php';
require_once '../controller/controllerInnovation.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {
    
    // Actions de connexion
    case "login":
    case "logout":
    case "register":
        ControllerConnexion::$action();
        break;
    
    // Actions du responsable
    case "ListProjets":
    case "addProjet":
    case "ListExaminateurs":
    case "addExaminateur":
    case "listExaminateursProjet":
    case "Planning":
        ControllerResponsable::$action();
        break;
    
    // Actions de l'examinateur
    case "ListProjets":
    case "ListAllCreneaux":
    case "ListCreneauxProjet":
    case "AddCreneau":
    case "AddListCreneaux":
        ControllerExaminateur::$action();
        break;
    
    // Actions de l'étudiant
    case "ListRendezVous":
    case "PrendreRendezVous":
    case "getCreneauxDisponibles":
        ControllerEtudiant::$action();
        break;
    
    // Actions d'innovation
    case "innovation":
    case "innovationFonctionOriginale":
    case "innovationAmeliorationCode":
        ControllerInnovation::$action();
        break;
    
    // Autres actions...
    
    default:
        if (isset($_SESSION['login_id'])) {
            // Redirection selon le rôle
            if ($_SESSION['roles']['responsable']) {
                header('Location: router2.php?action=ListProjets');
            } elseif ($_SESSION['roles']['examinateur']) {
                header('Location: router2.php?action=ListProjets');
            } elseif ($_SESSION['roles']['etudiant']) {
                header('Location: router2.php?action=ListRendezVous');
            }
            exit();
        } else {
            require '../view/connexion/login.php';
        }
        break;
}
?>