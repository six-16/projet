<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Ajouter des créneaux consécutifs</h2>
<form method="post" action="?action=creneauxCreated">
    <label>Projet :
        <select name="projet">
            <?php foreach ($projets as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['label'] ?></option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Début : <input type="datetime-local" name="start" required></label><br>
    <label>Nombre de créneaux (1-10) : <input type="number" name="nb" min="1" max="10" required></label><br>
    <input type="submit" value="Ajouter">
</form>

<?php require_once '../view/fragment/footer.php'; ?>
