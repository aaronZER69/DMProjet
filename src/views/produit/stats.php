<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<h2>Tableau de bord - Statistiques commerciales</h2>

<div class="stats-grid">
    <a href="/client/index" class="stat-card">
        <h3>Clients</h3>
        <p><?= $nbClients ?> clients enregistrés</p>
    </a>

    <a href="/vente/index" class="stat-card">
        <h3>Ventes</h3>
        <p><?= $nbVentes ?> ventes réalisées</p>
    </a>

    <a href="/performance/index" class="stat-card">
        <h3>Performance</h3>
        <p>Objectif atteint à <?= $tauxMoyen ?>%</p>
    </a>

    <a href="/produit/index" class="stat-card">
        <h3>Produits</h3>
        <p><?= $nbProduits ?> produits en catalogue</p>
    </a>

    <a href="/objectif/index" class="stat-card">
        <h3>Objectifs</h3>
        <p><?= $nbObjectifs ?> objectifs définis</p>
    </a>
</div>

<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1rem;
    }

    .stat-card {
        background-color: #f5f5f5;
        padding: 1.5rem;
        border-radius: 10px;
        text-decoration: none;
        color: #333;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }

    .stat-card:hover {
        transform: scale(1.03);
    }

    .stat-card h3 {
        margin-bottom: 0.5rem;
    }

    .stat-card p {
        font-size: 1.1rem;
        margin: 0;
    }
</style>

<?php include 'includes/footer.php'; ?>
