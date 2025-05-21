<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
    }

    .nav-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .nav-links a {
        display: inline-block;
        padding: 10px 15px;
        background-color: #1abc9c;
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .nav-links a:hover {
        background-color: #16a085;
    }
    .text-center {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        text-align: center;
        height: 500px;
    }
</style>

<h2>Indicateurs de performance</h2>

<div class="nav-links">
    <a href="../performence/commercial.php">Performance commerciale</a>
    <a href="../performence/equipe.php">Performance de l'équipe</a>
    <a href="../performence/report.php">Rapport global</a>
</div>

<?php include '../includes/footer.php'; ?>
