<?php

use Controllers\RoutesController;

$routes = new RoutesController;
$routes->getRoute('home', 'HomeController@home');
$routes->getRoute('', 'HomeController@index');
$routes->getRoute('produto', 'ProdutoController@index');
$routes->getRoute('contato', 'ContatoController@showContacts');