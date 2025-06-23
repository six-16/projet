<?php
require_once '../model/ModelEtudiant.php';

class ControllerEtudiant {
    public static function listRendezVous() {
        include 'config.php';
        $etudiant_id = $_SESSION['login_id'];
        $rdvs = ModelEtudiant::getRendezVousByEtudiant($etudiant_id);
        require '../view/etudiant/listRDV.php';
    }

    public static function prendreRendezVous() {
        include 'config.php';
        $etudiant_id = $_SESSION['login_id'];
        $projets = ModelEtudiant::getProjetsDisponibles();
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier que les champs existent
            if (!empty($_POST['creneau_id']) && is_numeric($_POST['creneau_id'])) {
                $creneau_id = $_POST['creneau_id'];

                // Vérifier si l'étudiant a déjà un RDV pour ce projet
                $projet_id = ModelEtudiant::getProjetIdByCreneau($creneau_id);
                if ($projet_id === false) {
                    $error = "Projet introuvable pour ce créneau.";
                } else {
                    $hasAlreadyRdv = ModelEtudiant::hasAlreadyRdvForProjet($etudiant_id, $projet_id);

                    if ($hasAlreadyRdv) {
                        $error = "Vous avez déjà un rendez-vous pour ce projet.";
                    } else {
                        $success = ModelEtudiant::addRendezVous($creneau_id, $etudiant_id);
                        if ($success) {
                            header('Location: router2.php?action=etudiantListRendezVous');
                            exit();
                        } else {
                            $error = "Erreur lors de la prise de rendez-vous.";
                        }
                    }
                }
            } else {
                $error = "Veuillez sélectionner un créneau valide.";
            }
        }

        require '../view/etudiant/prendreRDV.php';
    }


    public static function getCreneauxDisponibles() {
        include 'config.php';
        $projet_id = $_GET['projet_id'] ?? null;
        if ($projet_id) {
            $creneaux = ModelEtudiant::getCreneauxDisponiblesByProjet($projet_id);
            echo json_encode($creneaux);
        }
    }
}
?>