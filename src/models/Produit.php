<?php
require_once __DIR__ . '/../config/database.php';
class Produit {
    public function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM produit");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}