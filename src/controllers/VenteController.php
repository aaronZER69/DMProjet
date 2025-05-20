<?php
require_once __DIR__ . '/../models/Vente.php';
class VenteController {
    public function index() {
        $ventes = (new Vente())->getAll();
        require __DIR__ . '/../views/vente/index.php';
    }
}
