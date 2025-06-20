<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');?>

<body>
    
    <div class="container mt-5">
        <h2>Innovations proposées</h2>
        
        <div class="list-group">
            <a href="router2.php?action=innovationFonctionOriginale" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Fonction originale avec les données</h5>
                <p class="mb-1">Visualisation avancée des statistiques de soutenances</p>
            </a>
            <a href="router2.php?action=innovationAmeliorationCode" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Amélioration de l'architecture MVC</h5>
                <p class="mb-1">Proposition d'optimisation de la structure du code</p>
            </a>
        </div>
    </div>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>