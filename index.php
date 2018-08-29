<?php
session_start();
require_once ("braintree_init.php");
require_once "lib/Braintree.php";

echo ($clientTken = Braintree_Clienttoken::generate());

?>

