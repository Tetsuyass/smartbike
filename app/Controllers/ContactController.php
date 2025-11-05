<?php
namespace App\Controllers;
use App\Models\Contact;

class ContactController {
    public function form() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'last_name' => $_POST['last_name'] ?? '',
                'first_name' => $_POST['first_name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'message' => $_POST['message'] ?? '',
            ];
            Contact::create($data);
            header('Location: /?page=contact_success');
            exit;
        }
        require __DIR__ . '/../Views/contact.php';
    }
}
