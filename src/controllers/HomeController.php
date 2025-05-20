<?php

class HomeController {
    public function index() {
        require 'views/home/index.php';
    }

    public function dashboard() {
        require 'views/home/dashboard.php';
    }
}
