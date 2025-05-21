<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
    }

    .add-link {
        display: block;
        width: fit-content;
        margin: 20px auto;
        padding: 10px 15px;
        background-color: #1abc9c;
        color: white;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
    }

    .add-link:hover {
        background-color: #16a085;
    }

    table {
        border-collapse: collapse;
        margin: auto;
        width: 90%;
        background-color: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #2c3e50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    td a {
        margin: 0 5px;
        color: #2980b9;
        text-decoration: none;
        font-weight: bold;
    }

    td a:hover {
        color: #1abc9c;
    }
</style>

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
    <?php if (!empty($ventes)) : ?>
        <?php foreach ($ventes as $vente): ?>
            <tr>
                <td><?= htmlspecialchars($vente['id_vente']) ?></td>
                <td><?= htmlspecialchars($vente['quantite']) ?></td>
                <td><?= htmlspecialchars($vente['date']) ?></td>
                <td><?= htmlspecialchars($vente['id_produit']) // Remplacer par nom du produit si jointure faite ?></td>
                <td><?= htmlspecialchars($vente['id_client']) // Remplacer par nom du client si jointure faite ?></td>
                <td>
                    <a href="?controller=vente&action=show&id=<?= urlencode($vente['id_vente']) ?>">Voir</a>
                    <a href="?controller=vente&action=edit&id=<?= urlencode($vente['id_vente']) ?>">Modifier</a>
                    <a href="?controller=vente&action=delete&id=<?= urlencode($vente['id_vente']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette vente ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Aucune vente enregistrée.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<a class="add-link" href="../vente/create.php">+ Ajouter une vente</a>

<?php include '../includes/footer.php'; ?>
