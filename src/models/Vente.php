<?php
require_once __DIR__ . '/../config/database.php';

class Vente {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    // Récupérer tous les produits
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM produit");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer un seul produit par son ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM produit WHERE id_prod = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajouter un produit
    public function create($nom, $prix) {
        $stmt = $this->db->prepare("INSERT INTO produit (nom, prix) VALUES (?, ?)");
        return $stmt->execute([$nom, $prix]);
    }

    // Modifier un produit existant
    public function update($id, $nom, $prix) {
        $stmt = $this->db->prepare("UPDATE produit SET nom = ?, prix = ? WHERE id_prod = ?");
        return $stmt->execute([$nom, $prix, $id]);
    }

    // Supprimer un produit
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM produit WHERE id_prod = ?");
        return $stmt->execute([$id]);
    }
}
