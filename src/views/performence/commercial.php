<?php
include '../includes/header.php';
include '../includes/nav.php';

// Exemple d'initialisation pour tester (à remplacer par ta vraie source de données)
if (!isset($data)) {
    $data = [
        'nv_clients' => 'N/A',
        'nb_ventes' => 'N/A',
        'CA' => 'N/A'
    ];
}
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

    .perf-box {
        background-color: white;
        width: 50%;
        margin: 30px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    .perf-box ul {
        list-style: none;
        padding: 0;
    }

    .perf-box li {
        padding: 10px 0;
        font-size: 18px;
        border-bottom: 1px solid #eee;
    }

    .perf-box li:last-child {
        border-bottom: none;
    }
</style>

<h2>Performance Commerciale</h2>

<div class="perf-box">
    <ul>
        <li><strong>Nouveaux clients :</strong> <?= isset($data['nv_clients']) ? htmlspecialchars($data['nv_clients']) : 'Donnée non disponible' ?></li>
        <li><strong>Nombre de ventes :</strong> <?= isset($data['nb_ventes']) ? htmlspecialchars($data['nb_ventes']) : 'Donnée non disponible' ?></li>
        <li><strong>Chiffre d'affaires :</strong> <?= isset($data['CA']) ? htmlspecialchars($data['CA']) . ' €' : 'Donnée non disponible' ?></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
