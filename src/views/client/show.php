<?php
include '../includes/header.php';
require_once '../../config/database.php';

// Vérifie si un ID est passé dans l'URL
if (!isset($_GET['id'])) {
    echo "<p>Client non spécifié.</p>";
    include '../includes/footer.php';
    exit;
}

$id = $_GET['id'];

$pdo = Database::connect();
$stmt = $pdo->prepare("SELECT * FROM clients WHERE id_client = ?");
$stmt->execute([$id]);
$client = $stmt->fetch(PDO::FETCH_ASSOC);
Database::disconnect();

if (!$client) {
    echo "<p>Client introuvable.</p>";
    include '../includes/footer.php';
    exit;
}
?>

<h2>Détails du client</h2>
<p><strong>ID :</strong> <?= htmlspecialchars($client['id_client']) ?></p>
<p><strong>Nom :</strong> <?= htmlspecialchars($client['nom']) ?></p>
<p><strong>Email :</strong> <?= htmlspecialchars($client['email']) ?></p>

<a href="index.php">Retour à la liste</a>

<?php include '../includes/footer.php'; ?>
