<?php
require_once 'controllers/ClientController.php';
require_once 'controllers/PerformanceController.php';
require_once 'controllers/ObjectifController.php';
require_once 'controllers/ProduitController.php';
require_once 'controllers/VenteController.php';
require_once 'controllers/DashboardController.php';

$controller = $_GET['controller'] ?? 'dashboard';

switch ($controller) {
    case 'performance':
        (new PerformanceController())->index();
        break;
    case 'objectif':
        (new ObjectifController())->index();
        break;
    case 'produit':
        (new ProduitController())->index();
        break;
    case 'vente':
        (new VenteController())->index();
        break;
    case 'client':
        (new ClientController())->index();
        break;
    default:
        (new DashboardController())->index();
        break;
}
