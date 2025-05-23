<?php
include '../includes/header.php';
include '../includes/nav.php';


if (!isset($rapports) || !is_array($rapports) || empty($rapports)) {
    $rapports = [
        [
            'periode' => 'N/A',
            'nv_clients' => 'N/A',
            'nb_ventes' => 'N/A',
            'objectif' => 'N/A',
            'taux_atteint' => 'N/A',
            'CA' => 'N/A',
        ]
    ];
}
?>

<h2>Rapport global de performance</h2>
<table border="1" cellpadding="5" cellspacing="0">
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
            <td><?= htmlspecialchars($r['periode']) ?></td>
            <td><?= htmlspecialchars($r['nv_clients']) ?></td>
            <td><?= htmlspecialchars($r['nb_ventes']) ?></td>
            <td><?= htmlspecialchars($r['objectif']) ?> €</td>
            <td><?= htmlspecialchars($r['taux_atteint']) ?>%</td>
            <td><?= htmlspecialchars($r['CA']) ?> €</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
