<?php
namespace App\Models;
require_once __DIR__ . '/Model.php';

class Contact extends Model {
    public static function create($data) {
        $sql = "INSERT INTO contacts (last_name, first_name, email, message) 
                VALUES (:last_name, :first_name, :email, :message)";
        $stmt = self::db()->prepare($sql);
        $stmt->execute([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'email' => $data['email'],
            'message' => $data['message']
        ]);
        return self::db()->lastInsertId();
    }
}
