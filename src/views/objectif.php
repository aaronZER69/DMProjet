<!DOCTYPE html>
<html>
<head><title>Objectifs</title></head>
<body>
<h1>Objectifs de Vente</h1>
<ul>
    <?php foreach ($objectifs as $obj): ?>
        <li>Objectif de vente: <?= $obj['obj_vente'] ?> €</li>
    <?php endforeach; ?>
</ul>
</body>
</html>

// views/produits.php
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