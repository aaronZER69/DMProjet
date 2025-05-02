<ul>
    <?php foreach ($data as $item): ?>
        <li><?= htmlspecialchars($item['nom']) ?> - <?= htmlspecialchars($item['email']) ?></li>
    <?php endforeach; ?>
</ul>