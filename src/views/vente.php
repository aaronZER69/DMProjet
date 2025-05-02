<ul>
    <?php foreach ($data as $item): ?>
        <li>Quantité: <?= htmlspecialchars($item['quantite']) ?> - Date: <?= htmlspecialchars($item['date']) ?></li>
    <?php endforeach; ?>
</ul>