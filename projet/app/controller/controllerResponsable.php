<?php
require_once '../model/ModelResponsable.php';

class ControllerResponsable {
    
    public static function listProjets() {
        include 'config.php';
        $login_id = $_SESSION['login_id'];
        $projets = ModelResponsable::getProjetsByResponsable($login_id);
        require '../view/responsable/listProjet.php';
    }

    public static function addProjet() {
        include 'config.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $label = $_POST['label'];
            $groupe = $_POST['groupe'];
            $responsable_id = $_SESSION['login_id'];
            
            if (empty($label) || $groupe < 1 || $groupe > 5) {
                $error = "Label obligatoire et groupe entre 1 et 5";
            } else {
                $success = ModelResponsable::addProjet($label, $groupe, $responsable_id);
                if ($success) {
                    header('Location: router2.php?action=responsableListProjets');
                    exit();
                } else {
                    $error = "Erreur lors de l'ajout du projet";
                }
            }
        }
        require '../view/responsable/addProjet.php';
    }

    public static function listExaminateurs() {
        include 'config.php';
        $examinateurs = ModelResponsable::getAllExaminateurs();
        require '../view/responsable/listExaminateur.php';
    }

    public static function addExaminateur() {
        include 'config.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $password = $_POST['password']; // Pas de hash dans cette version
            
            $success = ModelResponsable::addExaminateur($nom, $prenom, $login, $password);
            if ($success) {
                header('Location: router2.php?action=responsableListExaminateurs');
                exit();
            } else {
                $error = "Erreur lors de l'ajout de l'examinateur";
            }
        }
        require '../view/responsable/addExaminateur.php';
    }

    public static function listExaminateursProjet() {
        include 'config.php';
        $login_id = $_SESSION['login_id'];
        $projets = ModelResponsable::getProjetsByResponsable($login_id);
        
        if (isset($_POST['projet_id'])) {
            $examinateurs = ModelResponsable::getExaminateursByProjet($_POST['projet_id']);
        }
        
        require '../view/responsable/listExaminateurProjet.php';
    }

    public static function planningProjet() {
        include 'config.php';
        $login_id = $_SESSION['login_id'];
        $projets = ModelResponsable::getProjetsByResponsable($login_id);
        
        if (isset($_POST['projet_id'])) {
            $rdvs = ModelResponsable::getRendezVousByProjet($_POST['projet_id']);
        }
        
        require '../view/responsable/planning.php';
    }
}
?>