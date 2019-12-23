<?php
session_id('0csjht35vqr6hs4t95830mi094'); // para acessar uma sessão já aberta
// consigo acessar mesmo em uma aba anonima

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>