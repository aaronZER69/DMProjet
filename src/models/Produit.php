<?php
require_once '../config/database.php';

class Produit {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM produit");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($nom, $prix) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO produit (nom, prix) VALUES (?, ?)");
        return $stmt->execute([$nom, $prix]);
    }
}
