<?php
//autoloader simple pour ne pas load chaque classe à la main (c'est chiant)
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relative = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative) . '.php';
    if (file_exists($file)) require $file;
});

// simple router via ?page=
$page = $_GET['page'] ?? 'accueil';

use App\Controllers\HomeController;
use App\Controllers\ProduitController;
use App\Controllers\CommandeController;
use App\Controllers\ContactController;

switch ($page) {
    case 'accueil':
        (new HomeController())->index();
        break;
    case 'produits':
        (new ProduitController())->index();
        break;
    case 'produit':
        // ex: ?page=produit&id=1
        $id = $_GET['id'] ?? null;
        if ($id) (new ProduitController())->show((int)$id);
        else header('Location: /?page=produits');
        break;
    case 'commander':
        (new CommandeController())->form();
        break;
    case 'contact':
        (new ContactController())->form();
        break;
    default:
        (new HomeController())->index();
        break;
}
