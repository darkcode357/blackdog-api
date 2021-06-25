<?php

require(__DIR__.'/Includes/inc_api_configurations.php');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

try {
    $app->run();
} catch (Exception $e) {
    die(json_encode(['error' => 'Action not permited']));
}
