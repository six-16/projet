<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/menu.php'; ?>

<h2>Créer un compte</h2>

<form method="post" action="?action=registerConfirm">
    <label>Nom : <input type="text" name="nom" required></label><br>
    <label>Prénom : <input type="text" name="prenom" required></label><br>
    <label>Login : <input type="text" name="login" required></label><br>
    <label>Mot de passe : <input type="password" name="password" required></label><br>

    <label>Rôle :
        <select name="role">
            <option value="etudiant">Étudiant</option>
            <option value="examinateur">Examinateur</option>
            <option value="responsable">Responsable</option>
        </select>
    </label><br>

    <input type="submit" value="Créer mon compte">
</form>

<?php require_once '../view/fragment/footer.php'; ?>
