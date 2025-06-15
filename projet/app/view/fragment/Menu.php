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
            <li><a href="router2.php?action=projetList">Liste de mes projets</a></li>
            <li><a href="router2.php?action=projetAdd">Ajouter un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=examinateurList">Liste des examinateurs</a></li>
            <li><a href="router2.php?action=examinateurAdd">Ajouter un examinateur</a></li>
            <li><a href="router2.php?action=projetExaminateurs">Examinateurs d’un projet</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="router2.php?action=projetPlanning">Planning d’un projet</a></li>
          </ul>
        </li>
      <?php endif; ?>

      <?php if (!empty($roles['examinateur'])): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
             aria-haspopup="true" aria-expanded="false">Examinateur <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="router2.php?action=creneauList">Mes créneaux</a></li>
            <li><a href="router2.php?action=creneauAdd">Ajouter un créneau</a></li>
            <li><a href="router2.php?action=creneauAddConsecutifs">Ajouter des créneaux consécutifs</a></li>
            <li><a href="router2.php?action=creneauListProjet">Créneaux d’un projet</a></li>
          </ul>
        </li>
      <?php endif; ?>

      <?php if (!empty($roles['etudiant'])): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
             aria-haspopup="true" aria-expanded="false">Étudiant <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="router2.php?action=rdvList">Mes rendez-vous</a></li>
            <li><a href="router2.php?action=rdvAdd">Prendre un rendez-vous</a></li>
          </ul>
        </li>
      <?php endif; ?>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">Innovations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="router2.php?action=innovations">Nos idées</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false">Connexion <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php if ($userName): ?>
            <li><a href="router2.php?action=logout">Se déconnecter</a></li>
          <?php else: ?>
            <li><a href="router2.php?action=login">Se connecter</a></li>
            <li><a href="router2.php?action=register">Créer un compte</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </div>
</nav>
