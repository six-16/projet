<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<div class="container">
    <h1>Liste de mes projets</h1>
    <p>Cette interface vous permet de visualiser tous les projets dont vous êtes responsable.</p>

    <div class="table-responsive">
        <h2>Liste des créneaux (avec projet + examinateur)</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Projet</th>
      <th>Groupe</th>
      <th>Examinateur</th>
      <th>Date / Heure</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($creneaux as $c): ?>
      <tr>
        <td><?= htmlspecialchars($c['label']) ?></td>
        <td><?= htmlspecialchars($c['groupe']) ?></td>
        <td><?= htmlspecialchars($c['prenom']) . ' ' . htmlspecialchars($c['nom']) ?></td>
        <td><?= htmlspecialchars($c['creneau']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    </div>
</div>

<?php require_once '../views/fragment/footer.php'; ?>

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
