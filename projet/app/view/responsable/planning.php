<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    
    <div class="container mt-5">
        <h2>Planning d'un projet</h2>
        
        <form method="post" class="mb-4">
            <div class="form-group">
                <label for="projet_id">Sélectionnez un projet</label>
                <select class="form-control" id="projet_id" name="projet_id" required>
                    <option value="">-- Choisir un projet --</option>
                    <?php foreach ($projets as $projet): ?>
                    <option value="<?= $projet['id'] ?>"><?= htmlspecialchars($projet['label']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Afficher</button>
        </form>
        
        <?php if (isset($rdvs)): ?>
        <?php if (count($rdvs) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Examinateur</th>
                    <th>Créneau</th>
                    <th>Étudiant</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rdvs as $rdv): ?>
                <tr>
                    <td><?= htmlspecialchars($rdv['projet_label']) ?></td>
                    <td><?= htmlspecialchars($rdv['examinateur_prenom'] . ' ' . $rdv['examinateur_nom']) ?></td>
                    <td><?= htmlspecialchars($rdv['creneau']) ?></td>
                    <td><?= htmlspecialchars($rdv['etudiant_prenom'] . ' ' . $rdv['etudiant_nom']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Aucun rendez-vous trouvé pour ce projet.</p>
        <?php endif; ?>
        <?php endif; ?>

    </div>
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
