<?php 
require_once(__DIR__ . '/../fragment/fragmentHeader.html');
require($root . '/app/view/fragment/fragmentMenu.php');
require($root . '/app/view/fragment/fragmentJumbotron.html');
?>

<body>
  <div class="container mt-5">
    <h2>Prendre un rendez-vous pour un projet</h2>

    <?php if (!empty($error)): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="router2.php?action=prendreRendezVous">
      <div class="form-group">
        <label for="projet_id">Projet :</label>
        <select class="form-control" id="projet_id" name="projet_id" required>
          <option value="">-- Choisissez un projet --</option>
          <?php foreach ($projets as $projet): ?>
            <option value="<?= $projet['id'] ?>"><?= htmlspecialchars($projet['label']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group mt-3">
        <label for="creneau_id">Créneau disponible :</label>
        <select class="form-control" id="creneau_id" name="creneau_id" required>
          <option value="">-- Choisissez un créneau --</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary mt-4">Réserver ce créneau</button>
    </form>
  </div>

  <script>
    document.getElementById('projet_id').addEventListener('change', function () {
      const projetId = this.value;
      const selectCreneau = document.getElementById('creneau_id');
      selectCreneau.innerHTML = '<option value="">Chargement...</option>';

      fetch(`../../router/router2.php?action=getCreneauxDisponibles&projet_id=${projetId}`)
        .then(response => response.json())
        .then(data => {
          selectCreneau.innerHTML = '<option value="">-- Choisissez un créneau --</option>';
          if (data.length === 0) {
            selectCreneau.innerHTML = '<option value="">Aucun créneau disponible</option>';
          } else {
            data.forEach(item => {
              const label = `${item.creneau} (${item.examinateur_prenom} ${item.examinateur_nom})`;
              const option = new Option(label, item.id);
              selectCreneau.add(option);
            });
          }
        });
    });
  </script>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
</body>
</html>
