<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require ($root . '/app/view/fragment/fragmentMenu.php');
require ($root . '/app/view/fragment/fragmentJumbotron.html');
?>

<body>
    <?php 
    ?>
    
    <div class="container mt-5">
        <h2>Prendre un rendez-vous</h2>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="projet_id">Sélectionnez un projet</label>
                <select class="form-control" id="projet_id" name="projet_id" required>
                    <option value="">-- Choisir un projet --</option>
                    <?php foreach ($projets as $projet): ?>
                    <option value="<?= $projet['id'] ?>"><?= htmlspecialchars($projet['label']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="creneau_id">Sélectionnez un créneau</label>
                <select class="form-control" id="creneau_id" name="creneau_id" required disabled>
                    <option value="">-- Choisissez d'abord un projet --</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Prendre rendez-vous</button>
        </form>
    </div>
    
    <script>
    $('#projet_id').change(function() {
    var projetId = $(this).val();
    $('#creneau_id').html('<option>Chargement...</option>').prop('disabled', true);
    $('#submitBtn').prop('disabled', true);

    if (projetId) {
        $.get('router2.php?action=getCreneauxDisponibles&projet_id=' + projetId, function(data) {
            console.log("Réponse reçue : ", data);
            var creneaux = JSON.parse(data);
            var options = '<option value="">-- Sélectionnez un créneau --</option>';

            if (creneaux.length > 0) {
                creneaux.forEach(function(creneau) {
                    var date = new Date(creneau.creneau);
                    var dateStr = date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
                    options += '<option value="' + creneau.id + '">' + dateStr + 
                              ' - ' + creneau.examinateur_prenom + ' ' + creneau.examinateur_nom + '</option>';
                });
                $('#creneau_id').html(options).prop('disabled', false);
                $('#submitBtn').prop('disabled', false);
            } else {
                $('#creneau_id').html('<option value="">-- Aucun créneau disponible --</option>').prop('disabled', true);
                $('#submitBtn').prop('disabled', true);
            }
        });
    } else {
        $('#creneau_id').html('<option value="">-- Choisissez d\'abord un projet --</option>').prop('disabled', true);
        $('#submitBtn').prop('disabled', true);
    }
});

    </script>
    
    <?php 
    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
</body>
</html>