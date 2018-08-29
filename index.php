<?php
session_start();
require('vendor/autoload.php');
require_once ("braintree_init.php");

echo ($clientTken = Braintree_Clienttoken::generate());

?>

