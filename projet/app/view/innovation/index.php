<?php require_once '../view/fragment/header.php'; ?>
<?php require_once '../view/fragment/Menu.php'; ?>

<h2>Nos Innovations</h2>

<ul>
    <li>✔ Utilisation de classes `Model` abstraites pour factoriser la connexion à la base</li>
    <li>✔ Menu dynamique selon les rôles via `$_SESSION['roles']`</li>
    <li>✔ Créneaux consécutifs avec auto-génération d'heures</li>
    <li>✔ Séparation stricte MVC (aucune requête SQL dans les vues)</li>
    <li>✔ Utilisation des vues dynamiques avec `htmlspecialchars()` pour la sécurité</li>
</ul>

<p>Nous avons également prévu des extensions possibles pour gérer la salle de soutenance ou ajouter une vue admin globale.</p>

<?php require_once '../view/fragment/footer.php'; ?>
