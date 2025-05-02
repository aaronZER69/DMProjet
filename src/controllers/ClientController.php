<?php

require_once __DIR__ . '/../models/Client.php';

class ClientController
{
    public function index()
    {
        $model = new Client();
        $data = $model->getAll();
        require __DIR__ . '/../views/clients.php';
    }
}
