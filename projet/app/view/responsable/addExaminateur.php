<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Ajout d'un nouvel examinateur</h2>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success">Examinateur ajouté avec succès!</div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
</html>