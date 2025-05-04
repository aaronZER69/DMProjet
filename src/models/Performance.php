<?php
require_once __DIR__ . '/../config/database.php';
class Performance {
    public function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM performance");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}