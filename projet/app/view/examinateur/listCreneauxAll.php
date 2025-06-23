<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');
?>

<body>
    
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
    
    <?php     require ($root . '/app/view/fragment/fragmentFooter.html');
 ?>
</body>
</html>