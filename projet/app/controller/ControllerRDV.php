<?php


class ControllerRDV {
    public static function listByEtudiant() {
        $model = new ModelRDV();
        $rdvs = $model->getByEtudiant($_SESSION['login_id']);
        include '../view/rdv/list.php';
    }
}

?>