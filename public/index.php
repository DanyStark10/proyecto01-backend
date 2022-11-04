<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
##==##==##==##==##==##==##==##==##==##==##==##==##==##
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use App\Controllers\BlogController as Blog;
use App\Controllers\ContactoController as Contact;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath('/proyecto01-backend/public');

$twig = Twig::create('../templates', [ 'cache' => false]);
$app->add(TwigMiddleware::create($app,$twig));



$app->get('/', 'App\Controllers\HomeController:index');
$app->get('/contacto', Contact::class .':index');
$app->get('/blog', Blog::class . ':index');


$app->run();