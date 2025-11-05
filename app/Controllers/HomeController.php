<?php
namespace App\Controllers;
use App\Models\Product;

class HomeController {
    public function index() {
        $last = Product::lastAdded();
        require __DIR__ . '/../Views/home.php';
    }
}
