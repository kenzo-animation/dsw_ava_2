<?php
require __DIR__ . '/vendor/autoload.php';
 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
 
$app = AppFactory::create();
 
// Rota: /uma-api
$app->get('/uma-api', function (Request $request, Response $response) {
    $data = ['mensagem' => 'API é um conjunto de rotinas e padrões de programação para acesso a um aplicativo de software ou plataforma baseado na Web.'];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json');
});
 
// Rota: /codigos
$app->get('/codigos', function (Request $request, Response $response) {
    $data = [
        '200' => 'OK - Requisição bem-sucedida.',
        '404' => 'Not Found - Recurso não encontrado.',
        '500' => 'Internal Server Error - Erro no servidor.'
    ];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json');
});
 
// Rota: /erro
$app->get('/erro', function (Request $request, Response $response) {
    $data = ['erro' => 'Não encontrado'];
    $response->getBody()->write(json_encode($data));
    return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
});
 
$app->run();