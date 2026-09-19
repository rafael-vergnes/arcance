<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Utils\Utils;

use View\View;
use View\ViewHeader;
use View\ViewFooter;
use View\ViewHome;

//On récupère le "path" de l'URL demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url['path']) ? $url['path'] : '/';

//On appelle le contrôleur lié à la route demandée
switch ($path) {
    case '/':
        $view = new ViewHome("Accueil", "./assets/styles/home.css", "");
        $view->displayAll();
        break;
}