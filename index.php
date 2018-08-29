<?php
session_start();
require_once ("braintree_init.php");

echo ($clientTken = Braintree_Clienttoken::generate());
?>
