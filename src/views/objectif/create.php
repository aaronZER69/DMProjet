<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<h2>Ajouter un Objectif</h2>

<form method="POST" action="?controller=objectif&action=store">
    <label for="obj_vente">Objectif Vente (€)</label>
    <input type="number" name="obj_vente" step="0.01" required><br><br>

    <label for="date_debut">Date de début</label>
    <input type="date" name="date_debut" required><br><br>

    <label for="date_fin">Date de fin</label>
    <input type="date" name="date_fin" required><br><br>

    <button type="submit">Enregistrer</button>
</form>

<a href="?controller=objectif&action=index">Retour</a>

<?php include '../includes/footer.php'; ?>
