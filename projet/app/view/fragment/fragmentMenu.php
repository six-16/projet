<?php
$studentNames = "CRAVE-MIEMOUNITOU";
$userName = $_SESSION['user_name'] ?? '';
$roles = $_SESSION['roles'] ?? [];
?>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="router2.php?action=login"><?= $studentNames ?></a>
    </div>

    <ul class="nav navbar-nav">

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
             aria-haspopup="true" aria-expanded="false">Étudiant <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="router2.php?action=ListRendezVous">Liste de mes rendez-vous</a></li>
            <li><a href="router2.php?action=PrendreRendezVous">Prendre un RDV pour un projet</a></li>
          </ul>
        </li>
      <?php endif; ?>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">Innovations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=fonctionOriginale">Proposez une fonctionnalité originale</a></li>
          <li><a href="router2.php?action=ameliorationCode">Proposez une amélioration du code MVC</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">Se connecter <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php if ($userName): ?>
            <li><a href="router2.php?action=logout">déconnexion</a></li>
          <?php else: ?>
            <li><a href="router2.php?action=login">Login</a></li>
            <li><a href="router2.php?action=register">S'inscrire</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </div>
</nav>
