<?php
require_once __DIR__ . '/../config/database.php';
class Objectif {
    public function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM objectif");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}