<?php
session_start();
require('vendor/autoload.php');
require_once ("braintree_init.php");

$app['debug'] = true;

$app->get('/', function() {
    return '<h2><?php echo ($clientTken = Braintree_Clienttoken::generate());?></h2>';
});
echo ($clientTken = Braintree_Clienttoken::generate());

$app->run();
?>

