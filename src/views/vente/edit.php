<?php?>
<h2>Modifier une vente</h2>
<form method="post" action="?controller=vente&action=update&id=<?= $vente['id_vente'] ?>">
    <label>Quantité :</label>
    <input type="number" name="quantite" value="<?= $vente['quantite'] ?>" required><br>
    <label>Date :</label>
    <input type="date" name="date" value="<?= $vente['date'] ?>" required><br>
    <label>Produit :</label>
    <select name="id_produit">
        <?php foreach ($produits as $prod): ?>
            <option value="<?= $prod['id_prod'] ?>" <?= $prod['id_prod'] == $vente['id_produit'] ? 'selected' : '' ?>><?= $prod['nom'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Client :</label>
    <select name="id_client">
        <?php foreach ($clients as $cli): ?>
            <option value="<?= $cli['id_client'] ?>" <?= $cli['id_client'] == $vente['id_client'] ? 'selected' : '' ?>><?= $cli['nom'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Mettre à jour</button>
</form>
