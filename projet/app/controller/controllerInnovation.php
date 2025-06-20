<?php
require_once '../model/ModelInnovation.php';

class ControllerInnovation {
    public static function index() {
        include 'config.php';
        require '../view/innovation/index.php';
    }

    public static function fonctionOriginale() {
        include 'config.php';
        // Fonction originale utilisant les données de la base
        $stats = ModelInnovation::getProjectStatistics();
        $popularExams = ModelInnovation::getMostPopularExaminers();
        
        require '../view/innovation/fonctionOriginale.php';
    }

    public static function ameliorationCode() {
        // Amélioration de l'architecture MVC
        include 'config.php';
        require '../view/innovation/ameliorationCode.php';
    }
}
?>