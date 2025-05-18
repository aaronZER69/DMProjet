<?php include '../includes/header.php'; ?>
<h2>Ajouter un client</h2>
<form action="/client/store" method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br>
    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>
    <button type="submit">Créer</button>
</form>
<a href="/client/index">Annuler</a>
<?php include '../includes/footer.php'; ?>
