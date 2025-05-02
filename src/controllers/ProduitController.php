<?php

require_once __DIR__ . '/../models/Produit.php';

class ProduitController
{
    public function index()
    {
        $model = new Produit();
        $data = $model->getAll();
        require __DIR__ . '/../views/produits.php';
    }
}