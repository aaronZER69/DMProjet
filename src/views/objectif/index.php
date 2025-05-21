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
    .text-center {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        text-align: center;
        height: 350px;
    }
</style>

<h2>Liste des Objectifs</h2>

<a class="add-link" href="create.php">+ Ajouter un objectif</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Objectif Vente (€)</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($objectifs)) : ?>
        <?php foreach ($objectifs as $obj): ?>
            <tr>
                <td><?= htmlspecialchars($obj['id_obj']) ?></td>
                <td><?= htmlspecialchars($obj['obj_vente']) ?></td>
                <td>
                    <a href="?controller=objectif&action=show&id=<?= urlencode($obj['id_obj']) ?>">Voir</a>
                    <a href="?controller=objectif&action=edit&id=<?= urlencode($obj['id_obj']) ?>">Modifier</a>
                    <a href="?controller=objectif&action=delete&id=<?= urlencode($obj['id_obj']) ?>" onclick="return confirm('Confirmer la suppression de cet objectif ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">Aucun objectif enregistré.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
