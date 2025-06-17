<?php
require_once '../controller/config.php';
session_start();

// Réinitialisation de login_id si demandé
if (isset($_GET['reset']) {
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
    case 'login':
        ControllerConnexion::login();
        break;
    case 'logout':
        ControllerConnexion::logout();
        break;
    case 'register':
        ControllerConnexion::register();
        break;
        
    // Actions du responsable
    case 'responsableListProjets':
        ControllerResponsable::listProjets();
        break;
    case 'responsableAddProjet':
        ControllerResponsable::addProjet();
        break;
    case 'responsableListExaminateurs':
        ControllerResponsable::listExaminateurs();
        break;
    case 'responsableAddExaminateur':
        ControllerResponsable::addExaminateur();
        break;
    case 'responsableListExaminateursProjet':
        ControllerResponsable::listExaminateursProjet();
        break;
    case 'responsablePlanning':
        ControllerResponsable::planningProjet();
        break;
    
    case "ListProjets":
    case "addProjet":
    case "ListExaminateurs":
    case "addExaminateur":
    case "listExaminateursProjet":
    case
        
        
    // Actions de l'examinateur
    case 'examinateurListProjets':
        ControllerExaminateur::listProjets();
        break;
    case 'examinateurListAllCreneaux':
        ControllerExaminateur::listAllCreneaux();
        break;
    case 'examinateurListCreneauxProjet':
        ControllerExaminateur::listCreneauxProjet();
        break;
    case 'examinateurAddCreneau':
        ControllerExaminateur::addCreneau();
        break;
    case 'examinateurAddListCreneaux':
        ControllerExaminateur::addListCreneaux();
        break;
    
    // Actions de l'étudiant
    case 'etudiantListRendezVous':
        ControllerEtudiant::listRendezVous();
        break;
    case 'etudiantPrendreRendezVous':
        ControllerEtudiant::prendreRendezVous();
        break;
    case 'getCreneauxDisponibles':
        ControllerEtudiant::getCreneauxDisponibles();
        break;
    
    // Actions d'innovation
    case 'innovation':
        ControllerInnovation::index();
        break;
    case 'innovationFonctionOriginale':
        ControllerInnovation::fonctionOriginale();
        break;
    case 'innovationAmeliorationCode':
        ControllerInnovation::ameliorationCode();
        break;
    
    // Autres actions...
    
    default:
        if (isset($_SESSION['login_id'])) {
            // Redirection selon le rôle
            if ($_SESSION['roles']['responsable']) {
                header('Location: router2.php?action=responsableListProjets');
            } elseif ($_SESSION['roles']['examinateur']) {
                header('Location: router2.php?action=examinateurListProjets');
            } elseif ($_SESSION['roles']['etudiant']) {
                header('Location: router2.php?action=etudiantListRendezVous');
            }
            exit();
        } else {
            require '../view/connexion/login.php';
        }
        break;
}
?>