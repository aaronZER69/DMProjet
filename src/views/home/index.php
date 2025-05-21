<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .navbar {
            background: #34495e;
            padding: 10px 0;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .navbar a:hover {
            background: #1abc9c;
        }

        .content {
            padding: 30px;
            text-align: center;
        }
        .text-center {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-align: center;
            height: 450px;
        }

    </style>
</head>
<body>

<header>
    <h1>Bienvenue sur le tableau de bord</h1>
</header>

<nav class="navbar">
    <ul>
        <li class="nav-item"><a class="nav-link" href="../client/index.php">Clients</a></li>
        <li class="nav-item"><a class="nav-link" href="../produit/index.php">Produits</a></li>
        <li class="nav-item"><a class="nav-link" href="../vente/index.php">Ventes</a></li>
        <li class="nav-item"><a class="nav-link" href="../objectif/index.php">Objectifs</a></li>
        <li class="nav-item"><a class="nav-link" href="../performence/index.php">Performance</a></li>
    </ul>
</nav>

<div class="content">
    <p>Utilisez la barre de navigation pour accéder aux différentes sections.</p>
</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>
