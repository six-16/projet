<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Liste complète de mes créneaux</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Créneau</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($creneaux as $creneau): ?>
                <tr>
                    <td><?= htmlspecialchars($creneau['label']) ?></td>
                    <td><?= htmlspecialchars($creneau['creneau']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>