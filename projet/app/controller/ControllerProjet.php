class ControllerProjet {
    public static function list() {
        $model = new ModelProjet();
        $projects = $model->getByResponsable($_SESSION['login_id']);
        include '../view/projet/list.php';
    }
}
