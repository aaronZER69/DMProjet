<h2>Liste des Objectifs</h2>
<a href="?controller=objectif&action=create">Ajouter un objectif</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Objectif Vente (€)</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($objectifs as $obj): ?>
        <tr>
            <td><?= $obj['id_obj'] ?></td>
            <td><?= $obj['obj_vente'] ?></td>
            <td>
                <a href="?controller=objectif&action=show&id=<?= $obj['id_obj'] ?>">Voir</a> |
                <a href="?controller=objectif&action=edit&id=<?= $obj['id_obj'] ?>">Modifier</a> |
                <a href="?controller=objectif&action=delete&id=<?= $obj['id_obj'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
