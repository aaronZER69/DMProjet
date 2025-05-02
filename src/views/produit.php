<ul>
    <?php foreach ($data as $item): ?>
        <li><?= htmlspecialchars($item['nom']) ?> - Prix: <?= htmlspecialchars($item['prix']) ?> €</li>
    <?php endforeach; ?>
</ul>