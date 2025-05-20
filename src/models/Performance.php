<?php
require_once __DIR__ . '/../config/database.php';

class Performance {
    public function getPerformanceCommerciale() {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT 
                COUNT(DISTINCT id_client) AS nv_clients,
                COUNT(*) AS nb_ventes,
                SUM(p.prix * v.quantite) AS CA
            FROM ventes v
            JOIN produit p ON v.id_produit = p.id_prod
        ");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getPerformanceEquipe() {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT 
                SUM(o.obj_vente) AS objectif,
                (SUM(p.prix * v.quantite) / SUM(o.obj_vente)) * 100 AS taux_atteint
            FROM objectif o
            JOIN ventes v ON v.date BETWEEN o.date_debut AND o.date_fin
            JOIN produit p ON v.id_produit = p.id_prod
        ");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getRapportGlobal() {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT 
                DATE_FORMAT(v.date, '%Y-%m') AS periode,
                COUNT(DISTINCT v.id_client) AS nv_clients,
                COUNT(*) AS nb_ventes,
                SUM(o.obj_vente) AS objectif,
                ROUND((SUM(p.prix * v.quantite) / SUM(o.obj_vente)) * 100, 2) AS taux_atteint,
                SUM(p.prix * v.quantite) AS CA
            FROM ventes v
            JOIN objectif o ON v.date BETWEEN o.date_debut AND o.date_fin
            JOIN produit p ON v.id_produit = p.id_prod
            GROUP BY periode
            ORDER BY periode DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
