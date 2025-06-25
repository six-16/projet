<?php
$studentNames = "CRAVE-MIEMOUNITOU";
$connectedUser = '';
if (!empty($_SESSION['login_nom']) && !empty($_SESSION['login_prenom'])) {
    $connectedUser = $_SESSION['login_nom'] . ' ' . $_SESSION['login_prenom'];
}
$roles = $_SESSION['roles'] ?? [];
$nom = $_SESSION['nom'] ?? '';
?>


<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="background-color: #a9dce3 ; color: #7689de ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="router2.php?action=login" style="color: white">
        <?= htmlspecialchars($studentNames) ?>
        <?php if ($connectedUser): ?>
            | <?= htmlspecialchars($connectedUser) ?> |
        <?php else: ?>
            ||
        <?php endif; ?>
      </a>

    </div>

    <ul class="nav navbar-nav" style="color: #7689de">
      
        <?php if (!empty($roles['responsable'])): ?>
          <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Responsable <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="router2.php?action=ListProjets" style="color: black">Liste de mes projets</a></li>
            <li><a href="router2.php?action=addProjet"style="color: black">Ajouter un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=ListExaminateurs" style="color: black">Liste des examinateurs</a></li>
            <li><a href="router2.php?action=addExaminateur"style="color: black">Ajout d'un examinateur</a></li>
            <li><a href="router2.php?action=listExaminateursProjet"style="color: black">Liste des examinateurs d’un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=planningProjet" style="color: black">Planning d’un projet</a></li>
        </ul>
      </li>
        <?php endif; ?>

        <?php if (!empty($roles['examinateur'])): ?>
        <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false"style="color: white">Examinateur <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="router2.php?action=ListProjets" style="color: black">Liste des projets</a></li>
            <li><a href="router2.php?action=ListAllCreneaux" style="color: black">Liste complète de mes créneaux</a></li>
            <li><a href="router2.php?action=ListCreneauxProjet" style="color: black">Liste de mes créneaux pour un projet</a></li>
            <li><a href="router2.php?action=AddCreneau"style="color: black">Ajouter un créneau à un projet</a></li>
            <li><a href="router2.php?action=AddListCreneaux"style="color: black">Ajouter des créneaux consécutifs</a></li>
        </ul>
      </li>
        <?php endif; ?>

        <?php if (!empty($roles['etudiant'])): ?>
          <li class="dropdown" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
               aria-haspopup="true" aria-expanded="false"style="color: white">Etudiant <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="router2.php?action=ListRendezVous"style="color: black">Liste de mes rendez-vous</a></li>
              <li><a href="router2.php?action=PrendreRendezVous"style="color: black">Prendre un RDV pour un projet</a></li> 
            </ul>
          </li> 
        <?php endif; ?>
     

      <!-- Innovations (toujours visible) -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
           aria-haspopup="true" aria-expanded="false"style="color: white">Innovation <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=fonctionOriginale"style="color: black">Fonctionnalité originale</a></li> 
          <li><a href="router2.php?action=ameliorationCode"style="color: black">Amélioration du code MVC</a></li>                     

        </ul>
      </li> 

      <!-- Se connecter (toujours visible) -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false"style="color: white">Se connecter <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php if (!empty($_SESSION['login_nom']) && !empty($_SESSION['login_prenom'])): ?>
            <li><a href="router2.php?action=logout"style="color: black">Déconnexion</a></li>
          <?php else: ?>
            <li><a href="router2.php?action=login" style="color: black">Login</a></li>
            <li><a href="router2.php?action=register"style="color: black">S'inscrire</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>

    <!-- Affichage du nom utilisateur connecté -->
    <?php if (!empty($nom)): ?>
      <p class="navbar-text navbar-right" style="margin-right:15px; color: #9d9d9d;">
        Connecté en tant que : <strong><?= htmlspecialchars($connectedUser) ?></strong>
      </p>
    <?php endif; ?>


  </div>
</nav>



