<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');

?>

<body>
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Inscription</h3>
            </div>
            <div class="card-body">
                <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Rôles</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="role_responsable" name="role_responsable">
                            <label class="form-check-label" for="role_responsable">Responsable</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="role_examinateur" name="role_examinateur">
                            <label class="form-check-label" for="role_examinateur">Examinateur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="role_etudiant" name="role_etudiant">
                            <label class="form-check-label" for="role_etudiant">Étudiant</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </form>
                
                <div class="text-center mt-3">
                    <a href="router2.php?action=login">Déjà un compte ? Se connecter</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    require ($root . '/app/view/fragment/fragmentFooter.html');
    ?>

</body>
</html>