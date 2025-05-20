<?php
class Database {
    private static $host = 'localhost';
    private static $db = 'TDB';
    private static $user = 'root';
    private static $pass = '';
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
    public static function disconnect() {
        self::$conn = null;
    }

}
