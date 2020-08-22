<?php

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;


$app->addRoutingMiddleware();
// Cambiar a false en produccion
$app->addErrorMiddleware(true, true, true);



$twig = Twig::create('./../templates');
// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

// Define named route
$app->get('/hello/{name}', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
    
    return $view->render($response, 'texto.twig',["data"=>$args['name']]);
});

$app->get('/subir', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
   
    
    return $view->render($response, 'subir.twig', ["imagenes"=>getImagenes()]);
});

$app->post('/subir', function ( $request,  $response) {
  $view = Twig::fromRequest($request);
  $uploadFileDir ='./uploads/';
  $uploadedFiles = $request->getUploadedFiles();
  $uploadedFile = $uploadedFiles['example1'];
  $filename=$uploadedFile->getClientFilename();
  $dest_path = $uploadFileDir . $filename;
  $uploadedFile->moveTo($dest_path);

    
    return $view->render($response, 'subir.twig', ["data"=>$dest_path, "imagenes"=>getImagenes()]);
 
});



$app->any('{route:.*}', function( $request,  $response) {
    $view = Twig::fromRequest($request);
  
    return $view->render($response, 'portada.twig');
  });

  function getImagenes(){
    $directory="./uploads";
    $dirint = dir($directory);
    $imagenes=[];
    while (($archivo = $dirint->read()) !== false)
    {
  
           $imagenes[]=$directory."/".$archivo;
        
    }
    $dirint->close();
    return $imagenes;

  }


 
?>