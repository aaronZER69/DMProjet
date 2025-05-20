<?php
require_once '../config/database.php';

class Objectif
{
    public static function getAll()
    {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM objectif");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($obj_vente, $date_debut, $date_fin)
    {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO objectif (obj_vente, date_debut, date_fin) VALUES (?, ?, ?)");
        return $stmt->execute([$obj_vente, $date_debut, $date_fin]);
    }

    public function getActuel()
    {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT * FROM objectif
            WHERE CURDATE() BETWEEN date_debut AND date_fin
            LIMIT 1
        ");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

