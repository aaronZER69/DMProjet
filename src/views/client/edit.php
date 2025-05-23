<?php
include '../includes/header.php';

// Vérifie que l'id du client est passé en GET ou POST (selon ta logique)
if (!isset($_GET['id'])) {
    // pas d'id, rediriger ou afficher une erreur
    header('Location: ../client/index.php');
    exit;
}

$id = (int) $_GET['id']; // sécuriser la donnée reçue

// Connexion à la BDD (exemple PDO)
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ma_base;charset=utf8', 'user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les infos du client
    $stmt = $pdo->prepare('SELECT * FROM clients WHERE id = ?');
    $stmt->execute([$id]);

    $client = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$client) {
        // client non trouvé
        echo "Client introuvable.";
        exit;
    }

} catch (PDOException $e) {
    echo "Erreur de connexion ou requête : " . $e->getMessage();
    exit;
}
?>

<!-- Ici, ton formulaire avec $client défini -->
<h2>Modifier un client</h2>
<form action="/client/edit" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($client['id_client']) ?>">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required><br>
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" required><br><br>
    <button type="submit">Mettre à jour</button>
</form>
<a href="../client/index.php">Annuler</a>

<?php include '../includes/footer.php'; ?>
