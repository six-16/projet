<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    
    <div class="container mt-5">
        <h2>Liste des examinateurs</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($examinateurs as $examinateur): ?>
                <tr>
                    <td><?= htmlspecialchars($examinateur['nom']) ?></td>
                    <td><?= htmlspecialchars($examinateur['prenom']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
</html>