<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<div class="container">
    <h1>Liste de mes projets</h1>
    <p>Cette interface vous permet de visualiser tous les projets dont vous êtes responsable.</p>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Responsable</th>
                    <th>Taille du groupe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= htmlspecialchars($project['label']) ?></td>
                    <td><?= htmlspecialchars($_SESSION['user_name']) ?></td>
                    <td><?= htmlspecialchars($project['groupe']) ?></td>
                    <td>
                        <a href="/projects/<?= $project['id'] ?>/examiners" class="btn btn-sm btn-info">Voir examinateurs</a>
                        <a href="/projects/<?= $project['id'] ?>/schedule" class="btn btn-sm btn-primary">Voir planning</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../views/partials/footer.php'; ?>

<?php
class Project {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Méthode pour récupérer les projets d'un responsable
    public function getByResponsable($responsableId) {
        $query = "SELECT * FROM projet WHERE responsable = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $responsableId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $projects = [];
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
        
        return $projects;
    }

    // Autres méthodes existantes...
}
?>
