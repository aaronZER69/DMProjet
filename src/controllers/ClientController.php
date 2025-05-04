<?php
require_once __DIR__ . '/../models/Client.php';
class ClientController {
    public function index() {
        $clients = (new Client())->getAll();
        require __DIR__ . '/../views/clients.php';
    }
}