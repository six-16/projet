<?php

class ControllerCreneau {
    public static function listByExaminateur() {
        $model = new ModelCreneau();
        $creneaux = $model->getByExaminateur($_SESSION['login_id']);
        include '../view/creneau/list.php';
    }
}

?>