<?php
namespace App\Controllers;
use App\Models\Produit;

class ProduitController {
    public function index() {
        $products = Produit::all();
        require __DIR__ . '/../Views/produits.php';
    }

    public function show($id) {
        $product = Produit::find($id);
        if (!$product) {
            header("HTTP/1.0 404 Not Found");
            echo "Produit non trouvé";
            exit;
        }
        require __DIR__ . '/../Views/produit_detail.php';
    }
}
