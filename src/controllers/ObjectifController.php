<?php
require_once __DIR__ . '/../models/Objectif.php';
class ObjectifController {
    public function index() {
        $objectifs = (new Objectif())->getAll();
        require __DIR__ . '/../views/objectifs.php';
    }
}
