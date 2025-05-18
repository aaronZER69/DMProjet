<?php include '../includes/header.php'; ?>
<h2>Détails du produit</h2>
<p><strong>Nom :</strong> <?= htmlspecialchars($produit['nom']) ?></p>
<p><strong>Catégorie :</strong> <?= htmlspecialchars($produit['categorie']) ?></p>
<p><strong>Prix :</strong> <?= htmlspecialchars($produit['prix']) ?> €</p>
<a href="/produit/edit?id=<?= $produit['id'] ?>">Modifier</a> |
<a href="/produit/index">Retour à la liste</a>
<?php include '../includes/footer.php'; ?>
