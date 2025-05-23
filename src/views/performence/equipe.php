<?php
include '../includes/header.php';
include '../includes/nav.php';

// Exemple d'initialisation (à remplacer par ta vraie source de données)
if (!isset($data)) {
    $data = [
        'taux_atteint' => 'N/A',
        'objectif' => 'N/A'
    ];
}
?>

<h2>Performance de l'équipe</h2>
<ul>
    <li>Taux d'atteinte des objectifs : <?= isset($data['taux_atteint']) ? htmlspecialchars($data['taux_atteint']) : 'Donnée non disponible' ?>%</li>
    <li>Objectif global : <?= isset($data['objectif']) ? htmlspecialchars($data['objectif']) . ' €' : 'Donnée non disponible' ?></li>
</ul>

<?php include '../includes/footer.php'; ?>
