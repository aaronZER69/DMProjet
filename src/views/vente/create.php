<?php?>
<h2>Ajouter une vente</h2>
<form method="post" action="?controller=vente&action=store">
  <label>Quantité :</label>
  <input type="number" name="quantite" required><br>
  <label>Date :</label>
  <input type="date" name="date" required><br>
  <label>Produit :</label>
  <select name="id_produit">
    <?php foreach ($produits as $prod): ?>
      <option value="<?= $prod['id_prod'] ?>"><?= $prod['nom'] ?></option>
    <?php endforeach; ?>
  </select><br>
  <label>Client :</label>
  <select name="id_client">
    <?php foreach ($clients as $cli): ?>
      <option value="<?= $cli['id_client'] ?>"><?= $cli['nom'] ?></option>
    <?php endforeach; ?>
  </select><br>
  <button type="submit">Enregistrer</button>
</form>

