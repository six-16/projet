<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/menu.php'; ?>

<h2>Mes créneaux pour un projet</h2>
<table border="1">
<thead>
<tr><th>Projet</th><th>Date/Heure</th></tr>
</thead>
<tbody>
<?php foreach ($creneaux as $c): ?>
    <tr><td><?= $c['projet'] ?></td><td><?= $c['creneau'] ?></td></tr>
<?php endforeach; ?>
</tbody>
</table>

<?php require_once '../view/fragment/footer.php'; ?>
