<?php
class Database{
    private static $pdo = null;

    public static function connect(){
        if(self::$pdo == null){
            $host = "mysql";
            $dbname = "tdb";
            $user = "root";
            $pass = "root";
            $charset = "utf8";

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur connexion BDD : ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }


    }

