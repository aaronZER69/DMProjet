<!DOCTYPE html>
<html>
<head><title>Performances</title></head>
<body>
<h1>Performances Commerciales</h1>
<ul>
    <?php foreach ($performances as $perf): ?>
        <li>Clients: <?= $perf['nv_clients'] ?> - Ventes: <?= $perf['nb_ventes'] ?> - CA: <?= $perf['CA'] ?> €</li>
    <?php endforeach; ?>
</ul>
</body>
</html>
