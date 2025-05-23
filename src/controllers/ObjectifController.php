<?php
require_once __DIR__ . '/../models/Objectif.php';
class ObjectifController {
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vente = $_POST['obj_vente'] ?? null;
            $debut = $_POST['date_debut'] ?? null;
            $fin = $_POST['date_fin'] ?? null;

            if ($vente && $debut && $fin) {
                $objectif = new Objectif();
                $objectif->create($vente, $debut, $fin);
            }
            exit;
        }
    }

    public function index() {
        $objectifs = (new Objectif())->getAll();
        require __DIR__ . '/../views/objectifs.php';
    }
}
