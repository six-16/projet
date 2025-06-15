<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Examinateurs affectés au projet</h2>
<table border="1">
<thead>
<tr><th>Nom</th><th>Prénom</th></tr>
</thead>
<tbody>
<?php foreach ($examinateurs as $e): ?>
    <tr><td><?= $e['nom'] ?></td><td><?= $e['prenom'] ?></td></tr>
<?php endforeach; ?>
</tbody>
</table>

<?php require_once '../view/fragment/footer.php'; ?>