<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<h2>Liste des ventes</h2>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Quantité</th>
        <th>Date</th>
        <th>Produit</th>
        <th>Client</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ventes as $vente): ?>
        <tr>
            <td><?= htmlspecialchars($vente['id_vente']) ?></td>
            <td><?= htmlspecialchars($vente['quantite']) ?></td>
            <td><?= htmlspecialchars($vente['date']) ?></td>
            <td><?= htmlspecialchars($vente['id_produit']) ?></td>
            <td><?= htmlspecialchars($vente['id_client']) ?></td>
            <td>
                <a href="?controller=vente&action=show&id=<?= $vente['id_vente'] ?>">Voir</a>
                <a href="?controller=vente&action=edit&id=<?= $vente['id_vente'] ?>">Modifier</a>
                <a href="?controller=vente&action=delete&id=<?= $vente['id_vente'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="create.php">Ajouter une vente</a>
