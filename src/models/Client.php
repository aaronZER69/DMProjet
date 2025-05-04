<?php
require_once __DIR__ . '/../config/database.php';
class Client {
    public function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM clients");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}