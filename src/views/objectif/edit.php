<?php
include '../includes/header.php';
include '../includes/nav.php';

// Vérifier que l'id est présent dans l'URL
if (!isset($_GET['id'])) {
    echo "Identifiant de l'objectif manquant.";
    exit;
}

$id = (int) $_GET['id'];

// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=mysql;dbname=TDB;charset=utf8', 'user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer l'objectif correspondant à l'id
    $stmt = $pdo->prepare('SELECT * FROM objectifs WHERE id_obj = ?');
    $stmt->execute([$id]);
    $objectif = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$objectif) {
        echo "Objectif non trouvé.";
        exit;
    }
} catch (PDOException $e) {
    echo "Erreur BDD : " . $e->getMessage();
    exit;
}
?>

<h2>Modifier un Objectif</h2>

<form method="POST" action="../objectif/edit.php=<?= htmlspecialchars($objectif['id_obj']) ?>">
    <label for="obj_vente">Objectif Vente (€)</label><br>
    <input
            type="number"
            id="obj_vente"
            name="obj_vente"
            step="0.01"
            value="<?= htmlspecialchars($objectif['obj_vente']) ?>"
            required
    >
    <br><br>
    <button type="submit">Mettre à jour</button>
</form>

<a href="../objectif/index.php">Retour</a>

<?php include '../includes/footer.php'; ?>
