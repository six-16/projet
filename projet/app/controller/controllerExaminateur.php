<?php
require_once '../model/ModelExaminateur.php';

class ControllerExaminateur {
    
    public static function listProjets() {
        include 'config.php';
        $examinateur_id = $_SESSION['login_id'];
        $projets = ModelExaminateur::getProjetsByExaminateur($examinateur_id);
        require '../view/examinateur/listProjet.php';
    }

    
    public static function listAllCreneaux() {
    include 'config.php';
    $examinateur_id = $_SESSION['login_id']; 
    $creneaux = ModelExaminateur::getAllCreneauxByExaminateur($examinateur_id);
    require '../view/examinateur/listCreneauxAll.php';
}

public static function listCreneauxProjet() {
    include 'config.php';
    $examinateur_id = $_SESSION['login_id'];
    $projets = ModelExaminateur::getProjetsByExaminateur($examinateur_id);

    $creneaux = [];
    if (isset($_POST['projet_id'])) {
        $projet_id = $_POST['projet_id'];
        $creneaux = ModelExaminateur::getCreneauxByProjetAndExaminateur($projet_id, $examinateur_id);
    }

    require '../view/examinateur/listCreneauxProjet.php';
}


    public static function addCreneau() {
        include 'config.php';
        $examinateur_id = $_SESSION['login_id'];
        $projets = ModelExaminateur::getProjetsByExaminateur($examinateur_id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $projet_id = $_POST['projet_id'];
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            
            // Création du datetime au format attendu par la base
            $creneau = $date . ' ' . str_pad($heure, 2, '0', STR_PAD_LEFT) . ':00:00';
            
            $success = ModelExaminateur::addCreneau($projet_id, $examinateur_id, $creneau);
            
            if ($success) {
                header('Location: router2.php?action=examinateurListAllCreneaux');
                exit();
            } else {
                $error = "Erreur lors de l'ajout du créneau";
            }
        }
        
        require '../view/examinateur/addCreneau.php';
    }

    public static function addListCreneaux() {
        include 'config.php';
        $examinateur_id = $_SESSION['login_id'];
        $projets = ModelExaminateur::getProjetsByExaminateur($examinateur_id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $projet_id = $_POST['projet_id'];
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $nb_creneaux = $_POST['nb_creneaux'];
            
            $success = true;
            
            for ($i = 0; $i < $nb_creneaux; $i++) {
                $heure_creneau = $heure + $i;
                $creneau = $date . ' ' . str_pad($heure_creneau, 2, '0', STR_PAD_LEFT) . ':00:00';
                
                $result = ModelExaminateur::addCreneau($projet_id, $examinateur_id, $creneau);
                if (!$result) $success = false;
            }
            
            if ($success) {
                header('Location: router2.php?action=examinateurListAllCreneaux');
                exit();
            } else {
                $error = "Erreur lors de l'ajout de certains créneaux";
            }
        }
        
        require '../view/examinateur/addListCreneau.php';
    }
}
?>