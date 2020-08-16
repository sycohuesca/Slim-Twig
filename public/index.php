<?php
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

// Create App
$app = AppFactory::create();

//$app->addRoutingMiddleware();

// Create Twig
//$twig = Twig::create('./../templates', ['cache' => './../cache']);
$twig = Twig::create('./../templates');
// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

// Define named route
$app->get('/hello/{name}', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
    $saludo=array("a"=>"alfa","b"=>"bravo");
    return $view->render($response, 'base.twig',["data"=>$saludo]);
});
$app->get('/login', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
  
    return $view->render($response, 'login.twig');
});



// Run app
$app->run();

?>