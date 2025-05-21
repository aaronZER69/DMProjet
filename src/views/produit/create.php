<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<h2>Ajouter un produit</h2>
<form action="create.php" method="post">
    <label>Nom :</label>
    <input type="text" name="nom" required>

    <label>Catégorie :</label>
    <input type="text" name="categorie" required>

    <label>Prix (€) :</label>
    <input type="number" name="prix" step="0.01" required>

    <button type="submit">Ajouter</button>
</form>

