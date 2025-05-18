<h2>Progression des Objectifs</h2>

<table>
    <thead>
    <tr>
        <th>Mois</th>
        <th>Objectif (€)</th>
        <th>Réalisé (€)</th>
        <th>Progression (%)</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($progressions as $p): ?>
        <tr>
            <td><?= $p['mois'] ?></td>
            <td><?= $p['objectif'] ?></td>
            <td><?= $p['realise'] ?></td>
            <td><?= $p['progression'] ?>%</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="?controller=objectif&action=index">Retour</a>
