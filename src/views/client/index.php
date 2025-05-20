<?php include '../includes/header.php'; ?>
<h2>Liste des clients</h2>
<a href="create.php">Ajouter un client</a>
<table border="1">
    <tr>
        <th>ID</th><th>Nom</th><th>Email</th><th>Actions</th>
    </tr>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= htmlspecialchars($client['nom']) ?></td>
            <td><?= htmlspecialchars($client['email']) ?></td>
            <td>
                <a href="/show?id=<?= $client['id'] ?>">Voir</a> |
                <a href="/edit?id=<?= $client['id'] ?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include '../includes/footer.php'; ?>
