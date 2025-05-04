<?php
require_once __DIR__ . '/../models/Produit.php';
class ProduitController {
    public function index() {
        $produits = (new Produit())->getAll();
        require __DIR__ . '/../views/produits.php';
    }
}