<?php
namespace App\Controllers;
use App\Models\Produit;
use App\Models\Commande;

class CommandeController {
    public function form($post = null) {
        $products = Produit::all();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' || $post) {
            $data = $_POST ?: $post;
            // validation basique — à renforcer
            $id = Commande::create($data);
            header('Location: /?page=commande_success&id=' . $id);
            exit;
        }
        require __DIR__ . '/../Views/commander.php';
    }
}
