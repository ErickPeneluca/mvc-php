<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/edit', 'UsuariosController@edit');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');