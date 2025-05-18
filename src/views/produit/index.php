<?php include '../includes/header.php'; ?>
<h2>Liste des produits</h2>
<a href="/produit/create">Ajouter un produit</a>
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
                <a href="/produit/show?id=<?= $produit['id'] ?>">Voir</a>
                <a href="/produit/edit?id=<?= $produit['id'] ?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include '../includes/footer.php'; ?>
