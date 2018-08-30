<?php
session_start();
require_once ("lib/autoload.php");
if(file_exists(__DIR__. "/../.env")){
  $dotenv = new Dotenv\Dotenv(__DIR__ ."/../");
  $dotenv->load();
}

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantid('gmzgbsb4p5mpx26c');
Braintree_Configuration::publicKey('7wj7kx8b4rgnn29v');
Braintree_Configuration::privateKey('a35eded73a53d8ea6b443a12bfe68080');
?>
