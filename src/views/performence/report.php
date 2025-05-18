<?php?>
<h2>Rapport global de performance</h2>
<table>
    <thead>
    <tr>
        <th>Période</th>
        <th>Nouveaux clients</th>
        <th>Ventes</th>
        <th>Objectif</th>
        <th>Taux atteint</th>
        <th>CA</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rapports as $r): ?>
        <tr>
            <td><?= $r['periode'] ?></td>
            <td><?= $r['nv_clients'] ?></td>
            <td><?= $r['nb_ventes'] ?></td>
            <td><?= $r['objectif'] ?> €</td>
            <td><?= $r['taux_atteint'] ?>%</td>
            <td><?= $r['CA'] ?> €</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="?controller=performance&action=index">Retour</a>

