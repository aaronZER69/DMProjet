    <?php
    include '../includes/header.php';
    require_once '../../config/database.php'; // adapter selon ton arborescence

    if (!isset($_GET['id_client'])) {
        header('Location: ../client/index.php');
        exit;
    }

    $id = (int) $_GET['id'];

    try {
        $pdo = Database::connect(); // Utilise ta classe Database

        $stmt = $pdo->prepare('SELECT * FROM client WHERE id_client = ?');
        $stmt->execute([$id]);
        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$client) {
            echo "Client introuvable.";
            exit;
        }

        Database::disconnect($pdo);
    } catch (PDOException $e) {
        echo "Erreur de connexion ou requête : " . $e->getMessage();
        exit;
    }
    ?>

    <h2>Modifier un client</h2>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($client['id_client']) ?>">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" required><br><br>
        <button type="submit">Mettre à jour</button>
    </form>
    <a href="../client/index.php">Annuler</a>

    <?php include '../includes/footer.php'; ?>
