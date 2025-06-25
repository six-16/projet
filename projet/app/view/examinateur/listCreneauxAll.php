<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');
?>

<body>
    
    <div class="container mt-5">
        <h2>Liste complète de mes créneaux</h2>
        
        <?php if (!empty($creneaux)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Date/Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($creneaux as $creneau): ?>
                <tr>
                    <td><?= htmlspecialchars($creneau['projet_label'] ?? '') ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($creneau['creneau'] ?? '')) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-info">
            Vous n'avez aucun créneau de prévu pour le moment.

        </div>
        <?php endif; ?>
    </div>
    
    <?php require ($root . '/app/view/fragment/fragmentFooter.html'); ?>
</body>
</html>