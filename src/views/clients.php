<!DOCTYPE html>
<html>
<head><title>Clients</title></head>
<body>
<h1>Liste des Clients</h1>
<ul>
    <?php foreach ($clients as $client): ?>
        <li><?= $client['nom'] ?> - <?= $client['email'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>

