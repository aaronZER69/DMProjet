<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
<?php
?>
<h2>Détail de la vente #<?= $vente['id_vente'] ?></h2>
<ul>
    <li>Quantité : <?= $vente['quantite'] ?></li>
    <li>Date : <?= $vente['date'] ?></li>
    <li>Produit : <?= $vente['nom_produit'] ?></li>
    <li>Client : <?= $vente['nom_client'] ?></li>
</ul>
<a href="?controller=vente&action=index">Retour à la liste</a>
