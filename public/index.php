<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();
require '../helpers.php';

// inspectAndDie(session_status());



// require '../helpers.php';
// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // uniform resource identifier


$router->route($uri);

