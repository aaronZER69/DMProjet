<!DOCTYPE html>
<html>
<head><title>Produits</title></head>
<body>
<h1>Produits</h1>
<ul>
    <?php foreach ($produits as $prod): ?>
        <li><?= $prod['nom'] ?> - <?= $prod['prix'] ?> €</li>
    <?php endforeach; ?>
</ul>
</body>
</html>