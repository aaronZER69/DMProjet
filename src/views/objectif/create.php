<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<h2>Ajouter un Objectif</h2>
<form method="POST" action="?controller=objectif&action=store">
    <label for="obj_vente">Objectif Vente (€)</label>
    <input type="number" name="obj_vente" step="0.01" required>
    <button type="submit">Enregistrer</button>
</form>
<a href="../objectif/index.php">Retour</a>
<?php include '../includes/footer.php'; ?>
