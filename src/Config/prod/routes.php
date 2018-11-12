<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response, $args) {
    return $response->withHeader('Content-Type', 'text/html')
        ->write('Welcome to you API')
        ->withStatus(200);
});
