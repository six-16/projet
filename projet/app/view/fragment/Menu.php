<?php
$studentNames = "CRAVE-MIEMOUNITOU";
$userName = $_SESSION['user_name'] ?? '';
$roles = $_SESSION['roles'] ?? [];
?>

<nav>
    <div class="menu-bar" style="padding: 10px; background-color: #f0f0f0;">
        <span class="student-names"><strong><?= $studentNames ?></strong></span>
        <?php if ($userName): ?>
            <span class="user-name" style="margin-left: 20px;">Connecté : <?= $userName ?></span>
        <?php endif; ?>

        <div class="menu-items" style="margin-top: 10px;">
            <?php if (!empty($roles['responsable'])): ?>
                <div class="dropdown">
                    <button class="dropbtn">Responsable ▼</button>
                    <div class="dropdown-content">
                        <a href="?action=projetList">Mes projets</a>
                        <a href="?action=projetAdd">Ajouter un projet</a>
                        <hr>
                        <a href="?action=examinateurList">Tous les examinateurs</a>
                        <a href="?action=examinateurAdd">Ajouter un examinateur</a>
                        <a href="?action=projetExaminateurs">Examinateurs d’un projet</a>
                        <hr>
                        <a href="?action=projetPlanning">Planning d’un projet</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($roles['examinateur'])): ?>
                <div class="dropdown">
                    <button class="dropbtn">Examinateur ▼</button>
                    <div class="dropdown-content">
                        <a href="?action=creneauList">Mes créneaux</a>
                        <a href="?action=creneauAdd">Ajouter un créneau</a>
                        <a href="?action=creneauAddConsecutifs">Ajouter créneaux consécutifs</a>
                        <a href="?action=creneauListProjet">Créneaux d’un projet</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($roles['etudiant'])): ?>
                <div class="dropdown">
                    <button class="dropbtn">Étudiant ▼</button>
                    <div class="dropdown-content">
                        <a href="?action=rdvList">Mes rendez-vous</a>
                        <a href="?action=rdvAdd">Prendre un rendez-vous</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="dropdown">
                <button class="dropbtn">Innovations ▼</button>
                <div class="dropdown-content">
                    <a href="?action=innovations">Voir nos idées</a>
                </div>
            </div>

            <?php if ($userName): ?>
                <a href="?action=logout" class="login-btn">Se déconnecter</a>
            <?php else: ?>
                <a href="?action=login" class="login-btn">Se connecter</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
