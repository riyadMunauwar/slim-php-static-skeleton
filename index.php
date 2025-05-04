<?php 

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

define('BASE_PATH', __DIR__ . '/');
define('APP_PATH', BASE_PATH . 'app/');
define('CONFIG_PATH', BASE_PATH . 'config/');
define('PUBLIC_PATH', BASE_PATH . 'public/');
define('SUPPORT_PATH', BASE_PATH . 'support/');

$app = AppFactory::create();

include_once SUPPORT_PATH . 'helper.php';

$app->get('/', function(Request $request, Response $response, array $args){
    return view($response, 'home.php', ['name' => 'Riyad']);
});


$app->run();