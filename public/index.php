<?php 

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

define('BASE_PATH', __DIR__ . '\/../');
define('APP_PATH', BASE_PATH . 'app/');
define('CONFIG_PATH', BASE_PATH . 'config/');
define('PUBLIC_PATH', BASE_PATH . 'public/');
define('ROUTE_PATH', BASE_PATH . 'route/');
define('SUPPORT_PATH', BASE_PATH . 'support/');

$app = AppFactory::create();

global $app;

include_once SUPPORT_PATH . 'helper.php';
include_once ROUTE_PATH . 'route.php';

$app->run();