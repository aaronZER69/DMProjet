<ul>
    <?php foreach ($data as $item): ?>
        <li>Objectif de vente: <?= htmlspecialchars($item['obj_vente']) ?> €</li>
    <?php endforeach; ?>
</ul>
