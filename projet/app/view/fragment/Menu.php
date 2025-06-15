<?php
$studentNames = "CRAVE-MIEMOUNITOU";
$userName = $_SESSION['user_name'] ?? '';
$roles = $_SESSION['roles'] ?? [];
?>

<nav style="background-color: #003366; color: white; padding: 10px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <span style="font-weight: bold; font-size: 18px; margin-right: 20px;">
                <?= $studentNames ?>
            </span>

            <?php if ($userName): ?>
                <span style="font-style: italic;">Connecté en tant que : <?= $userName ?></span>
            <?php endif; ?>
        </div>

        <div style="display: flex; gap: 15px;">
            <?php if (!empty($roles['responsable'])): ?>
                <div class="dropdown">
                    <span class="dropbtn">Responsable ▼</span>
                    <div class="dropdown-content">
                        <a href="?action=projetList">Liste de mes projets</a>
                        <a href="?action=projetAdd">Ajouter un projet</a>
                        <hr>
                        <a href="?action=examinateurList">Liste des examinateurs</a>
                        <a href="?action=examinateurAdd">Ajouter un examinateur</a>
                        <a href="?action=projetExaminateurs">Examinateurs d’un projet</a>
                        <hr>
                        <a href="?action=projetPlanning">Planning d’un projet</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($roles['examinateur'])): ?>
                <div class="dropdown">
                    <span class="dropbtn">Examinateur ▼</span>
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
                    <span class="dropbtn">Étudiant ▼</span>
                    <div class="dropdown-content">
                        <a href="?action=rdvList">Mes rendez-vous</a>
                        <a href="?action=rdvAdd">Prendre un rendez-vous</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="dropdown">
                <span class="dropbtn">Innovations ▼</span>
                <div class="dropdown-content">
                    <a href="?action=innovations">Voir nos idées</a>
                </div>
            </div>

            <?php if ($userName): ?>
                <a href="?action=logout" style="color: white;">Se déconnecter</a>
            <?php else: ?>
                <a href="?action=login" style="color: white;">Se connecter</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- CSS minimal pour dropdown -->
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        cursor: pointer;
        font-weight: bold;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        color: black;
        min-width: 220px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        padding: 10px;
        z-index: 1;
    }

    .dropdown-content a {
        display: block;
        padding: 6px;
        text-decoration: none;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content hr {
        margin: 5px 0;
        border: none;
        border-top: 1px solid #ccc;
    }
</style>
