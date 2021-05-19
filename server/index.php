<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

    require_once './helpers/DB.php';
    require_once './helpers/Routes.php';
    require './controllers/AuthController.php';

    $db = new DB('127.0.0.1', 'calendar', 'root', '');
    $routes = new Routes($db);

    $routes->add('auth', Routes::METHOD_GET, array('AuthController', 'login'));
    $routes->add('auth/new', Routes::METHOD_GET, array('AuthController', 'logout'));

    $routes->listen();


?>
