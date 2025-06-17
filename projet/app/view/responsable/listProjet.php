<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Liste de mes projets</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Label</th>
                    <th>Nombre d'étudiants</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projets as $projet): ?>
                <tr>
                    <td><?= htmlspecialchars($projet['id']) ?></td>
                    <td><?= htmlspecialchars($projet['label']) ?></td>
                    <td><?= htmlspecialchars($projet['groupe']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>