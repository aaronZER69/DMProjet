<?php
// index.php

require_once '/config/database.php';

// Fonction d'autoload pour les classes
spl_autoload_register(function ($class) {
    if (file_exists("controllers/$class.php")) {
        require_once "controllers/$class.php";
    } elseif (file_exists("models/$class.php")) {
        require_once "models/$class.php";
    }
});

// Contrôleur et action par défaut
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Construction du nom de classe
$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/$controllerClass.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstance = new $controllerClass();

    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Erreur : l'action '$action' n'existe pas.";
    }
} else {
    echo "Erreur : le contrôleur '$controllerClass' n'existe pas.";
}
