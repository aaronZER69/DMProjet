<?php

require_once __DIR__ . '/../config/database.php';

class Objectif
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM objectifs")->fetchAll();
    }
}