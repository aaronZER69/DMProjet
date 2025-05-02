<?php

require_once __DIR__ . '/../models/Vente.php';

class VenteController
{
    public function index()
    {
        $model = new Vente();
        $data = $model->getAll();
        require __DIR__ . '/../views/vente.php';
    }
}