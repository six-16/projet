<?php 
//require_once '../fragment/fragmentHeader.html'; 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
?>

<body>
    <?php require_once(__DIR__ . '/../fragment/fragmentMenu.php'); 
    //require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Fonction originale - Tableau de bord des soutenances</h2>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Statistiques par projet</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Projet</th>
                            <th>Examinateurs</th>
                            <th>Étudiants</th>
                            <th>Créneaux</th>
                            <th>RDV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stats as $stat): ?>
                        <tr>
                            <td><?= htmlspecialchars($stat['projet']) ?></td>
                            <td><?= htmlspecialchars($stat['nb_examinateurs']) ?></td>
                            <td><?= htmlspecialchars($stat['nb_etudiants']) ?></td>
                            <td><?= htmlspecialchars($stat['nb_creneaux']) ?></td>
                            <td><?= htmlspecialchars($stat['nb_rdv']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-6">
                <h4>Examinateurs les plus sollicités</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Examinateur</th>
                            <th>Projets</th>
                            <th>RDV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($popularExams as $exam): ?>
                        <tr>
                            <td><?= htmlspecialchars($exam['prenom'] . ' ' . $exam['nom']) ?></td>
                            <td><?= htmlspecialchars($exam['nb_projets']) ?></td>
                            <td><?= htmlspecialchars($exam['nb_rdv']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Jours les plus chargés</h4>
                <?php 
                $busyDays = ModelInnovation::getBusiestDays();
                if (!empty($busyDays)): ?>
                <div class="chart-container" style="height: 300px;">
                    <canvas id="busyDaysChart"></canvas>
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const ctx = document.getElementById('busyDaysChart').getContext('2d');
                    const chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [<?= implode(',', array_map(function($day) { 
                                return "'" . htmlspecialchars($day['date']) . "'"; 
                            }, $busyDays)) ?>],
                            datasets: [{
                                label: 'Nombre de RDV',
                                data: [<?= implode(',', array_map(function($day) { 
                                    return $day['nb_rdv']; 
                                }, $busyDays)) ?>],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1
                                    }
                                }
                            }
                        }
                    });
                });
                </script>
                <?php else: ?>
                <div class="alert alert-info">Aucune donnée disponible</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php require_once(__DIR__ . '/../fragment/fragmentFooter.html');
    //require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>