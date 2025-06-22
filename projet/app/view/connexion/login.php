<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');


?>

<body>
    <div class="container mt-5" style="max-width: 500px; background-color: #a9dce3 ; color: #7689de">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Connexion</h3>
            </div>
            <div class="card-body">
                <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                
                <form method="POST" action="router2.php?action=login">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                </form>
                
                <div class="text-center mt-3">
                    <a href="router2.php?action=register">Créer un compte</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    require ($root . '/app/view/fragment/fragmentFooter.html');
    ?>
</body>
</html>