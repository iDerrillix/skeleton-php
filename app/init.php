<?php

#INITIALIZATION FILE

// // require('core/App.php');
require('core/Controller.php');
require('core/Functions.php');
require('core/Validator.php');
require('core/Router.php');
$router = new Router();

$router->get('/skeleton-php/public/', 'app/controllers/home.php');
$router->get('/skeleton-php/public/test', 'app/controllers/test.php');
// require('routes.php');
