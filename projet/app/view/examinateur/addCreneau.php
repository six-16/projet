<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Ajouter un créneau à un projet</h2>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="projet_id">Sélectionnez un projet</label>
                <select class="form-control" id="projet_id" name="projet_id" required>
                    <option value="">-- Choisir un projet --</option>
                    <?php foreach ($projets as $projet): ?>
                    <option value="<?= $projet['id'] ?>"><?= htmlspecialchars($projet['label']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Quel jour ?</label>
                <input type="date" class="form-control" id="date" name="date" required 
                       min="<?= date('Y-m-d') ?>">
            </div>
            <div class="form-group">
                <label for="heure">Quelle heure ? (8-18)</label>
                <input type="number" class="form-control" id="heure" name="heure" 
                       min="8" max="18" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>