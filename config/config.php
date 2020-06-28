<?php

/**
 * ROTAS IMPORTANTES
 */
$pastaInterna="TemplateEngine/";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?$barra="":$barra="/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

/**
 * BANCO DE DADOS
 */
define('DBHOST', 'localhost');
define('DBNAME', '4dev');
define('DBUSER', 'root');
define('DBPASS', '');