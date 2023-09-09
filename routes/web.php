<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controller\ProdutoController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/busca', 'ProdutoController@mostrarTodosProdutos');

$router->delete('/deletar/{id}', 'ProdutoController@deletar');

$router->put('/atualiza/{id}', 'ProdutoController@atualiza');

$router->post('/criar', 'ProdutoController@criar');

