<?php
require_once __DIR__ . '/../models/Performance.php';
class PerformanceController {
    public function index() {
        $performances = (new Performance())->getAll();
        require __DIR__ . '/../views/performances.php';
    }
}