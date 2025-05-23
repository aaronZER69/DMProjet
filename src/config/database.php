<?php

class Database {
    private static $host = 'tableau_de_bord_mysql'; // nom du service Docker
    private static $db = 'TDB';
    private static $user = 'root';
    private static $pass = 'root';
    private static $charset = 'utf8mb4';

    public static function connect() {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
        try {
            $pdo = new PDO($dsn, self::$user, self::$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function disconnect(&$pdo) {
        $pdo = null;
    }
}

// Exemple d’utilisation :
$pdo = Database::connect();
echo "";
Database::disconnect($pdo);
