<?php
require_once __DIR__ . '/../config/database.php';

class Produit {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM produits")->fetchAll();
    }
}
