<?php
require_once __DIR__ . '/../config/database.php';
class Vente {
    public function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM ventes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}