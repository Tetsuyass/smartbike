<?php
namespace App\Controllers;
use App\Models\Produit;

class HomeController {
    public function index() {
        $last = Produit::lastAdded();
        require __DIR__ . '/../Views/home.php';
    }
}
