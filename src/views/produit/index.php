<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<h2>Liste des produits</h2>
<a href="create.php">Ajouter un produit</a>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($produits as $produit): ?>
        <tr>
            <td><?= htmlspecialchars($produit['nom']) ?></td>
            <td><?= htmlspecialchars($produit['categorie']) ?></td>
            <td><?= htmlspecialchars($produit['prix']) ?> €</td>
            <td>
                <a href="show?id=<?= $produit['id'] ?>">Voir</a>
                <a href="edit?id=<?= $produit['id'] ?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include '../includes/footer.php'; ?>
