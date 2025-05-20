<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<h2>Détails du produit</h2>
<p><strong>Nom :</strong> <?= htmlspecialchars($produit['nom']) ?></p>
<p><strong>Catégorie :</strong> <?= htmlspecialchars($produit['categorie']) ?></p>
<p><strong>Prix :</strong> <?= htmlspecialchars($produit['prix']) ?> €</p>
<a href="edit?id=<?= $produit['id'] ?>">Modifier</a> |
<a href="index.php">Retour à la liste</a>
<?php include '../includes/footer.php'; ?>
