<?php
session_start();
require('vendor/autoload.php');
require_once ("braintree_init.php");

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => 'php://stderr',
  ));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function() use($app){
    $app['monolog']->addDebug('logging output.');
    return $app['twig']->render('index.twig');
});
echo ($clientTken = Braintree_Clienttoken::generate());
$name = $clientTken = Braintree_Clienttoken::generate();

$app->run();
?>

