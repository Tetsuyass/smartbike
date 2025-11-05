<?php
namespace App\Models;

use PDO;
use PDOException;

class Model {
    protected static $pdo;
    protected static function db() {
        if (self::$pdo) return self::$pdo;
        $config = require __DIR__ . '/../../config/config.php';
        $c = $config['db'];
        $dsn = "pgsql:host={$c['host']};port={$c['port']};dbname={$c['dbname']};";
        try {
            self::$pdo = new PDO($dsn, $c['user'], $c['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            return self::$pdo;
        } catch (PDOException $e) {
            die('DB connection failed: ' . $e->getMessage());
        }
    }
}
