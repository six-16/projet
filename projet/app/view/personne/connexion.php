<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Connexion</h2>

<form method="post" action="?action=connect">
    <label>Login :
        <input type="text" name="login" required>
    </label><br>
    <label>Mot de passe :
        <input type="password" name="password" required>
    </label><br>
    <input type="submit" value="Se connecter">
</form>

<p>Pas encore de compte ? <a href="?action=register">Créer un compte</a></p>

<?php require_once '../view/fragment/footer.php'; ?>

