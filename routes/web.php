<?php

use Controllers\RoutesController;

$routes = new RoutesController;
$routes->getRoute('home', 'HomeController@home');
$routes->getRoute('', 'HomeController@index');
$routes->getRoute('produto_create', 'ProdutoController@create');
$routes->getRoute('produto_edit', 'ProdutoController@update');
$routes->getRoute('produto_delete', 'ProdutoController@remove');
$routes->getRoute('produto', 'ProdutoController@index');
$routes->getRoute('contato', 'ContatoController@showContacts');