<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<?php?>
<h2>Performance Commerciale</h2>
<ul>
    <li>Nouveaux clients : <?= $data['nv_clients'] ?></li>
    <li>Nombre de ventes : <?= $data['nb_ventes'] ?></li>
    <li>Chiffre d'affaires : <?= $data['CA'] ?> €</li>
</ul>
<?php include '../includes/footer.php'; ?>
