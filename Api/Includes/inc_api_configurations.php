<?php

use Slim\Factory\AppFactory;

require dirname(__DIR__,2).'/vendor/autoload.php';

$app = AppFactory::create();

list($debug, $apiRoute) = $_SERVER["HTTP_HOST"] === "localhost" || $_SERVER['SERVER_ADDR'] === '127.0.0.1' ? [true, 'AZ-TECNOLOGIA/api'] : [false, '/api'];
$app->addErrorMiddleware($debug, false, false);

$pathArr = $_SERVER['REQUEST_URI'];
$pathArr = explode("/",$pathArr);
$pathCount = count($pathArr);
$path = "/";
for($i = 0; $i < $pathCount; $i++){
	if($i == $pathCount-1) continue;
	$path .= $pathArr[$i];
	if($pathArr[$i] == "api") break;
	if($i > 0) $path .= "/";
}
$app->setBasePath($path);
