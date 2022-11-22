<?php

namespace App\Providers;

class PDODatabase
{
    /**
     * @var \PDO
     */
    private $pdo;

    private static $obj;

    private final function __construct()
    {
        $dbInfo = parse_ini_file(__DIR__ . "/../../db.ini");
        $pdo = new \PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
        $this->pdo = $pdo;
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public static function getConn() {
        if(!isset(self::$obj)) {
            self::$obj = new PDODatabase();
        }
        return self::$obj;
    }
}