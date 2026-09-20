<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../env.php';

use Utils\Utils;

use View\View;
use View\ViewHeader;
use View\ViewFooter;
use View\ViewHome;
use Mode\Model;
use Model\ModelFile;
use Controller\Controller;
use Controller\ControllerHome;

//On récupère le "path" de l'URL demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url['path']) ? $url['path'] : '/';

//On appelle le contrôleur lié à la route demandée
switch ($path) {
    case '/':
        $controller = new ControllerHome(new ModelFile(Utils::connect()),new ViewHome("Accueil", "./assets/styles/home.css", ""));
        $controller->render();
        break;
    case '/test':
        $view = new ModelFile(Utils::connect());
        var_dump($view->findAll());
        break;
}