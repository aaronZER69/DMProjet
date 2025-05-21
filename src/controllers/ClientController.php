<?php
require_once __DIR__ . '/../models/Client.php';

class ClientController {
public function create() {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';

$client = new Client();
$client->create($nom, $email); // méthode à créer dans le modèle

// Rediriger vers la liste des clients
header('Location: /client/index.php');
exit;
}

// Afficher le formulaire
require __DIR__ . '/../views/client/create.php';
}
}
