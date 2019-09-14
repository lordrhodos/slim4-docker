<?php declare(strict_types=1);

use \Lordrhodos\Slim4\Controller\HelloWorld;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->get('/[{name}]', HelloWorld::class);

$app->run();