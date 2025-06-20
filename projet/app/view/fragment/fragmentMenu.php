<?php
$studentNames = "CRAVE-MIEMOUNITOU";
$connectedUser = '';
if (!empty($_SESSION['login_nom']) && !empty($_SESSION['login_prenom'])) {
    $connectedUser = $_SESSION['login_nom'] . ' ' . $_SESSION['login_prenom'];
}

$nom = $_SESSION['nom'] ?? '';
?>


<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="router2.php?action=login">
    <?= htmlspecialchars($studentNames) ?>
    <?php if ($connectedUser): ?>
        | <?= htmlspecialchars($connectedUser) ?> |
    <?php endif; ?>
</a>

    </div>

    <ul class="nav navbar-nav">
      <?php if (!empty($nom)) : ?>
        <?php if (!empty($roles['responsable'])): ?>
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">Responsable <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="router2.php?action=ListProjets">Liste de mes projets</a></li>
            <li><a href="router2.php?action=AddProjet">Ajouter un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=ListExaminateurs">Liste des examinateurs</a></li>
            <li><a href="router2.php?action=addExaminateur">Ajout d'un examinateur</a></li>
            <li><a href="router2.php?action=listExaminateursProjet">Liste des examinateurs d’un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=Planning">Planning d’un projet</a></li>
        </ul>
      </li>
        <?php endif; ?>

        <?php if (!empty($roles['examinateur'])): ?>
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">Examinateur <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="router2.php?action=ListProjets">Liste des projets</a></li>
            <li><a href="router2.php?action=ListAllCreneaux">Liste complète de mes créneaux</a></li>
            <li><a href="router2.php?action=ListCreneauxProjet">Liste de mes créneaux pour un projet</a></li>
            <li><a href="router2.php?action=AddCreneau">Ajouter un créneau à un projet</a></li>
            <li><a href="router2.php?action=AddListCreneaux">Ajouter des créneaux consécutifs</a></li>
        </ul>
      </li>
        <?php endif; ?>

        <?php if (!empty($roles['etudiant'])): ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
               aria-haspopup="true" aria-expanded="false">Etudiant =<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="router2.php?action=ListRendezVous">Liste de mes rendez-vous</a></li>
              <li><a href="router2.php?action=PrendreRendezVous">Prendre un RDV pour un projet</a></li> 
            </ul>
          </li> 
        <?php endif; ?>
      <?php endif; ?>

      <!-- Innovations (toujours visible) -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false">Innovation <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=fonctionOriginale">Fonctionnalité originale</a></li> 
          <li><a href="router2.php?action=ameliorationCode">Amélioration du code MVC</a></li>                     

        </ul>
      </li> 

      <!-- Se connecter (toujours visible) -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">Se connecter <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php if ($nom): ?>
            <li><a href="router2.php?action=logout">Déconnexion</a></li>
          <?php else: ?>
            <li><a href="router2.php?action=login">Login</a></li>
            <li><a href="router2.php?action=register">S'inscrire</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>

    <!-- Affichage du nom utilisateur connecté -->
    <?php if (!empty($nom)): ?>
      <p class="navbar-text navbar-right" style="margin-right:15px; color: #9d9d9d;">
        Connecté en tant que : <strong><?= htmlspecialchars($userName) ?></strong>
      </p>
    <?php endif; ?>
  </div>
</nav>




