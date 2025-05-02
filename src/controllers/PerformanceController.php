<?php

require_once __DIR__ . '/../models/Performance.php';

class PerformanceController
{
    public function index()
    {
        $model = new Performance();
        $data = $model->getAll();
        require __DIR__ . '/../views/performances.php';
    }
}
