<?php include '../includes/header.php'; ?>
<h2>Modifier un client</h2>
<form action="/client/update" method="POST">
    <input type="hidden" name="id" value="<?= $client['id'] ?>">
    <label>Nom :</label><br>
    <input type="text" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required><br>
    <label>Email :</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" required><br><br>
    <button type="submit">Mettre à jour</button>
</form>
<a href="../client/index.php">Annuler</a>
<?php include '../includes/footer.php'; ?>
