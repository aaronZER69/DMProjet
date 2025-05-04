<!DOCTYPE html>
<html>
<head><title>Ventes</title></head>
<body>
<h1>Historique des Ventes</h1>
<ul>
    <?php foreach ($ventes as $vente): ?>
        <li>Date: <?= $vente['date'] ?> - Quantité: <?= $vente['quantite'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>