<?php
class Database {
    public static function connect() {
        try {
            return new PDO('mysql:host=localhost;dbname=TDB;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
