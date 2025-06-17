<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Liste des examinateurs d'un projet</h2>
        
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
        
        <?php if (isset($examinateurs)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($examinateurs as $examinateur): ?>
                <tr>
                    <td><?= htmlspecialchars($examinateur['nom']) ?></td>
                    <td><?= htmlspecialchars($examinateur['prenom']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>