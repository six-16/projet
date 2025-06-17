<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Liste de mes rendez-vous</h2>
        
        <?php if (empty($rdvs)): ?>
        <div class="alert alert-info">Vous n'avez aucun rendez-vous de prévu.</div>
        <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Examinateur</th>
                    <th>Date et heure</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rdvs as $rdv): ?>
                <tr>
                    <td><?= htmlspecialchars($rdv['projet_label']) ?></td>
                    <td><?= htmlspecialchars($rdv['examinateur_prenom'] . ' ' . $rdv['examinateur_nom']) ?></td>
                    <td><?= htmlspecialchars($rdv['creneau']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>