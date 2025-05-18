<?php include '../includes/header.php'; ?>
<h2>Détails du client</h2>
<p><strong>ID :</strong> <?= $client['id'] ?></p>
<p><strong>Nom :</strong> <?= htmlspecialchars($client['nom']) ?></p>
<p><strong>Email :</strong> <?= htmlspecialchars($client['email']) ?></p>
<a href="/client/index">Retour à la liste</a>
<?php include '../includes/footer.php'; ?>
