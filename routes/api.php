<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */
$router->get('/', 'Controller@getInfo');

$router->post('/place', 'OrderController@placeOrder');
$router->post('/update', 'OrderController@updateStatus');