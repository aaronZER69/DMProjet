<?php

require_once __DIR__ . '/../models/Client.php';
require_once __DIR__ . '/../models/Performance.php';
require_once __DIR__ . '/../models/Objectif.php';
require_once __DIR__ . '/../models/Produit.php';
require_once __DIR__ . '/../models/Vente.php';

class DashboardController
{
    public function index()
    {
        $clients = (new Client())->getAll();
        $performances = (new Performance())->getAll();
        $objectifs = (new Objectif())->getAll();
        $produits = (new Produit())->getAll();
        $ventes = (new Vente())->getAll();
        require __DIR__ . '/../views/dashboard.php';
    }
}