<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    
    <div class="container mt-5">
        <h2>Formulaire de création d'un nouveau projet</h2>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success">Projet ajouté avec succès!</div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="label">Label du projet</label>
                <input type="text" class="form-control" id="label" name="label" required>
            </div>
            <div class="form-group">
                <label for="groupe">Nombre d'étudiants dans un groupe (1-5)</label>
                <input type="number" class="form-control" id="groupe" name="groupe" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
</html>