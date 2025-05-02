<?php

require_once __DIR__ . '/../models/Objectif.php';

class ObjectifController
{
    public function index()
    {
        $model = new Objectif();
        $data = $model->getAll();
        require __DIR__ . '/../views/objectifs.php';
    }
}
