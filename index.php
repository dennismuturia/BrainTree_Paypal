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

$app->get('/', function() use($app){
    return '<h2><?php echo ($clientTken = Braintree_Clienttoken::generate());?></h2>';
});
echo ($clientTken = Braintree_Clienttoken::generate());

$app->run();
?>

