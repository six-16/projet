
<?php
require('../controller/ControllerPersonne.php');
require('../controller/ControllerProjet.php');
require('../controller/ControllerCreneau.php');
require('../controller/ControllerRDV.php');
require('../controller/ControllerInnovation.php');

// --- Récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];
parse_str($query_string, $param);
$action = isset($param['action']) ? htmlspecialchars($param['action']) : null;
unset($param['action']);
$args = $param;

// --- Liste des actions disponibles
switch ($action) {

    // === AUTHENTIFICATION ===
    case 'login':
    case 'connect':
    case 'logout':
    case 'register':
    case 'registerConfirm':
        ControllerPersonne::$action($args);
        break;

    // === PROJETS (Responsable) ===
    case 'projetList':
    case 'projetAdd':
    case 'projetCreated':
    case 'examinateurList':
    case 'examinateurAdd':
    case 'examinateurCreated':
    case 'projetExaminateurs':
    case 'projetPlanning':
        ControllerProjet::$action($args);
        break;

    // === CRENEAUX (Examinateur) ===
    case 'creneauList':
    case 'creneauAdd':
    case 'creneauCreated':
    case 'creneauAddConsecutifs':
    case 'creneauxCreated':
    case 'creneauListProjet':
        ControllerCreneau::$action($args);
        break;

    // === RENDEZ-VOUS (Étudiant) ===
    case 'rdvList':
    case 'rdvAdd':
    case 'rdvCreated':
        ControllerRDV::$action($args);
        break;

    // === INNOVATIONS (tous rôles) ===
    case 'innovations':
        ControllerInnovation::$action($args);
        break;

    // === ACTION PAR DÉFAUT ===
    default:
        ControllerPersonne::login([]); // redirection vers connexion
        break;
}
?>
