<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Ajouter un créneau</h2>
<form method="post" action="?action=creneauCreated">
    <label>Projet :
        <select name="projet">
            <?php foreach ($projets as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['label'] ?></option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Date/heure : <input type="datetime-local" name="creneau" required></label><br>
    <input type="submit" value="Ajouter">
</form>

<?php require_once '../view/fragment/footer.php'; ?>