<?php include '../includes/header.php'; ?>
<h2>Modifier le produit</h2>
<form action="/produit/edit" method="post">
    <input type="hidden" name="id" value="<?= $produit['id'] ?>">

    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($produit['nom']) ?>" required>

    <label>Catégorie :</label>
    <input type="text" name="categorie" value="<?= htmlspecialchars($produit['categorie']) ?>" required>

    <label>Prix (€) :</label>
    <input type="number" name="prix" step="0.01" value="<?= htmlspecialchars($produit['prix']) ?>" required>

    <button type="submit">Enregistrer</button>
</form>
<?php include '../includes/footer.php'; ?>
