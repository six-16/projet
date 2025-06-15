<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Planning des soutenances du projet</h2>
<table border="1">
<thead>
<tr><th>Étudiant</th><th>Date et heure</th><th>Examinateur</th></tr>
</thead>
<tbody>
<?php foreach ($planning as $p): ?>
    <tr>
        <td><?= $p['etudiant_prenom'] . ' ' . $p['etudiant_nom'] ?></td>
        <td><?= $p['creneau'] ?></td>
        <td><?= $p['examinateur_prenom'] . ' ' . $p['examinateur_nom'] ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php require_once '../view/fragment/footer.php'; ?>