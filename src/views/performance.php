<ul>
    <?php foreach ($data as $item): ?>
        <li>CA: <?= htmlspecialchars($item['CA']) ?> - Objectif: <?= htmlspecialchars($item['objectif']) ?> - Taux: <?= htmlspecialchars($item['taux_atteint']) ?>%</li>
    <?php endforeach; ?>
</ul>