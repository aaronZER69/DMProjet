<?php
// views/ventes/index.php
?>
<h2>Liste des ventes</h2>
<table>
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
            <td><?= $vente['id_vente'] ?></td>
            <td><?= $vente['quantite'] ?></td>
            <td><?= $vente['date'] ?></td>
            <td><?= $vente['nom_produit'] ?></td>
            <td><?= $vente['nom_client'] ?></td>
            <td>
                <a href="?controller=vente&action=show&id=<?= $vente['id_vente'] ?>">Voir</a>
                <a href="?controller=vente&action=edit&id=<?= $vente['id_vente'] ?>">Modifier</a>
                <a href="?controller=vente&action=delete&id=<?= $vente['id_vente'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="?controller=vente&action=create">Ajouter une vente</a>