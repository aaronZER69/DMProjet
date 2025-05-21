<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<h2>Modifier un Objectif</h2>
<form method="POST" action="?controller=objectif&action=update&id=<?= $objectif['id_obj'] ?>">
    <label for="obj_vente">Objectif Vente (€)</label>
    <input type="number" name="obj_vente" step="0.01" value="<?= $objectif['obj_vente'] ?>" required>
    <button type="submit">Mettre à jour</button>
</form>
<a href="../objectif/index.php">Retour</a>
<?php include '../includes/footer.php'; ?>
