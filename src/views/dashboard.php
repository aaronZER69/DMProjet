<!DOCTYPE html>
<html>
<head><title>Tableau de Bord</title></head>
<body>
<h1>Tableau de Bord des Indicateurs Commerciaux</h1>

<section>
    <h2>Clients</h2>
    <?php $data = $clients; require 'clients.php'; ?>
</section>

<section>
    <h2>Performances</h2>
    <?php $data = $performances; require 'performances.php'; ?>
</section>

<section>
    <h2>Objectifs</h2>
    <?php $data = $objectifs; require 'objectifs.php'; ?>
</section>

<section>
    <h2>Produits</h2>
    <?php $data = $produits; require 'produits.php'; ?>
</section>

<section>
    <h2>Ventes</h2>
    <?php $data = $ventes; require 'ventes.php'; ?>
</section>
</body>
</html>