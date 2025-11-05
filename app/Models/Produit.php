<?php
namespace App\Models;
require_once __DIR__ . '/Model.php';

class Produit extends Model {
    public static function all() {
        $stmt = self::db()->query("SELECT * FROM products ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public static function find($id) {
        $stmt = self::db()->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public static function findBySlug($slug) {
        $stmt = self::db()->prepare("SELECT * FROM products WHERE slug = :slug");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch();
    }

    public static function lastAdded() {
        $stmt = self::db()->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 1");
        return $stmt->fetch();
    }
}
