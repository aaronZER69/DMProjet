<?php
require_once '../config/database.php';

class Client {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM clients");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM clients WHERE id_client = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nom, $email, $date_inscription) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO clients (nom, email, date_inscription) VALUES (?, ?, ?)");
        return $stmt->execute([$nom, $email, $date_inscription]);
    }
}
