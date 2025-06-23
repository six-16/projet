<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    
    <div class="container mt-5">
        <h2>Liste des projets</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Responsable</th>
                    <th>Taille du groupe</th>
                </tr>
            </thead>
            <tbody>
              
                    <?php foreach ($projets as $projet): ?>
                <tr>
                    <td><?= htmlspecialchars($projet['label']) ?></td>
                    <td><?= htmlspecialchars($projet['responsable_nom'] . ' ' . $projet['responsable_prenom']) ?></td>
                    <td><?= htmlspecialchars($projet['groupe']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
</html>