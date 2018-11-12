<?php

use Slim\Http\Request;
use Slim\Http\Response;

require ROOT_PATH . "/Config/prod/routes.php";

$app->get('/test', function (Request $request, Response $response, $args) {
    return $response->withHeader('Content-Type', 'text/html')
        ->write('Your dev Endpoint')
        ->withStatus(200);
});
