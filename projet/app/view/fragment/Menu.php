<?php
session_start();
$studentNames = "CRAVE-MIEMOUNITOU"; // À remplacer par les noms des étudiants du binôme
$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$roles = isset($_SESSION['roles']) ? $_SESSION['roles'] : [];
?>

<nav>
    <div class="menu-bar">
        <span class="student-names"><?= $studentNames ?></span>
        <?php if ($userName): ?>
            <span class="user-name"><?= $userName ?></span>
        <?php endif; ?>
        
        <div class="menu-items">
            <?php if ($roles['responsable']): ?>
                <div class="dropdown">
                    <button class="dropbtn">Responsable ▼</button>
                    <div class="dropdown-content">
                        <a href="/projects">Liste de mes projets</a>
                        <a href="/projects/add">Ajout un projet</a>
                        <hr>
                        <a href="/projects/examiners">Liste des examinateurs</a>
                        <a href="/projects/examiners">Ajout d'un examinateur</a>
                        <a href="/projects/examiners">Liste des examinateurs d'un projet</a>
                        <hr>
                        <a href="/projects">Planning d'un projet</a>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ($roles['examinateur']): ?>
                <div class="dropdown">
                    <button class="dropbtn">Examinateur ▼</button>
                    <div class="dropdown-content">
                        <a href="/examiner/projects">Liste des projets</a>
                        <a href="/examiner/slots">Liste complète des mes créneaux</a>
                        <a href="/examiner/slots/add">Liste des mes créneaux pour un projet </a>
                        <a href="/examiner/slots/add-consecutive">Ajouter un créneau à un projet</a>
                        <a href="/examiner/slots/add-consecutive">Ajouter des créneaux consécutifs</a>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ($roles['etudiant']): ?>
                <div class="dropdown">
                    <button class="dropbtn">Etudiant ▼</button>
                    <div class="dropdown-content">
                        <a href="/student/appointments">Liste de mes rendez-vous</a>
                        <a href="/student/appointments/book">Prendre un rendez-vous pour un projet</a>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="dropdown">
                <button class="dropbtn">Innovations ▼</button>
                <div class="dropdown-content">
                    <a href="/innovations">Nos innovations</a>
                </div>
            </div>
            
            <?php if ($userName): ?>
                <a href="/logout" class="login-btn">Se déconnecter</a>
            <?php else: ?>
                <a href="/login" class="login-btn">Se connecter</a>
            <?php endif; ?>
                
            <div class="dropdown">
                <button class="dropbtn">Se connecter ▼</button>
                <div class="dropdown-content">
                    <a href="/innovations">Login</a>
                    <a href="/innovations">S'inscrire</a>
                    <a href="/innovations">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>
</nav>