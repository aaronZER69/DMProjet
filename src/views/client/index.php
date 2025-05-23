<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php';
require_once '../../config/database.php';

$pdo = Database::connect();

// Traitement éventuel du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nom']) && !empty($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $date = date('Y-m-d');
    $stmt = $pdo->prepare("INSERT INTO clients (nom, email, date_inscription) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $date]);

    exit;
}

// Récupération des clients
$stmt = $pdo->query("SELECT * FROM clients ORDER BY id_client DESC");
$clients = $stmt->fetchAll();


?>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
    }

    a {
        color: #1abc9c;
        text-decoration: none;

    }

    a.add-link{
        font-weight: bold;
    }
    a.add-client{
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    .add-client {
        display: block;
        width: fit-content;
        margin: 20px auto;
        padding: 10px 15px;
        background-color: #1abc9c;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .add-client:hover {
        background-color: #16a085;
    }

    table {
        border-collapse: collapse;
        margin: auto;
        width: 80%;
        background-color: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
        border: 1px solid #ccc;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #2c3e50;
        color: white;
    }

    td a {
        margin: 0 5px;
        color: #2980b9;
    }

    td a:hover {
        color: #1abc9c;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .text-center {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        text-align: center;
        height: 350px;
    }
</style>

<h2>Liste des clients</h2>

<a class="add-client" href="create.php">+ Ajouter un client</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($clients)) : ?>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= htmlspecialchars($client['id_client']) ?></td>
            <td><?= htmlspecialchars($client['nom']) ?></td>
            <td><?= htmlspecialchars($client['email']) ?></td>
            <td>
                <a href="../client/show.php?id=<?= urlencode($client['id_client']) ?>">Voir</a> |
                <a href="../client/edit.php?id=<?= urlencode($client['id_client']) ?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="4">Aucun client enregistré.</td>
    </tr>
<?php endif; ?>

        <tr>
            <td colspan="4">Aucun client enregistré.</td>
        </tr>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
