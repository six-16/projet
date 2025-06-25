<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');
?>

<body>
    <div class="container mt-5">
        <h2>Mes créneaux disponibles par projet</h2>
        
        <form method="post" class="mb-4">
            <div class="form-group">
                <label for="projet_id">Sélectionnez un projet :</label>
                <select class="form-control" id="projet_id" name="projet_id" required>
                    <option value="">-- Choisir un projet --</option>
                    <?php foreach ($projets as $projet): ?>
                        <?php $projet_id_value = $projet['id'] ?? $projet['projet_id'] ?? ''; ?>
                        <option value="<?= htmlspecialchars($projet_id_value) ?>"
                            <?= (isset($_POST['projet_id']) && $_POST['projet_id'] == $projet_id_value) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($projet['label'] ?? 'Projet sans nom') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Voir mes créneaux</button>
        </form>
        
        <?php if (isset($_POST['projet_id'])): ?>
            <?php 
    // Récupérer tous les créneaux et filtrer par projet sélectionné
    $allCreneaux = ModelExaminateur::getAllCreneauxByExaminateur($examinateur_id);
    $projet_id_post = $_POST['projet_id'] ?? null;

    $creneauxProjet = array_filter($allCreneaux, function($creneau) use ($projet_id_post) {
        return isset($creneau['projet_id']) && $creneau['projet_id'] == $projet_id_post;
    });
?>

            
            <div class="card mt-4">
               
                
                <?php if (!empty($creneauxProjet)): ?>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($creneauxProjet as $creneau): ?>
                            <li class="list-group-item">
                                <?= date('d/m/Y à H:i', strtotime($creneau['creneau'])) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <div class="card-body">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle mr-2"></i>
                            Vous n'avez pas encore proposé de créneaux pour ce projet.
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        <?php endif; ?>
    </div>
    
    <?php require ($root . '/app/view/fragment/fragmentFooter.html'); ?>
</body>
</html>