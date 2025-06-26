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
                <label for="projet_id">Sélectionnez un projet</label>
                <select class="form-control" id="projet_id" name="projet_id" required>
                    <option value="">-- Choisir un projet --</option>
                    <?php foreach ($projets as $projet): ?>
                        <option value="<?= $projet['id'] ?>" 
                            <?= isset($_POST['projet_id']) && $_POST['projet_id'] == $projet['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($projet['label'] ?? $projet['groupe']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Afficher</button>
        </form>
        
        <?php if (isset($_POST['projet_id'])): ?>
            <?php 
                $projet_id = (int) $_POST['projet_id']; 
                $creneauxProjet = ModelExaminateur::getCreneauxByProjetAndExaminateur($projet_id, $examinateur_id);
            ?>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Créneaux pour le projet sélectionné</h4>
                </div>
                
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
                            Aucun créneau disponible pour ce projet.
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <?php require ($root . '/app/view/fragment/fragmentFooter.html'); ?>
</body>
</html>
