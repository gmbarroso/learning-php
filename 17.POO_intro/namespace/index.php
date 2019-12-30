<?php
require_once("config.php");

use Cliente\Cadastro; // para usar um namespace

$cadastro = new Cadastro();

$cadastro->setNome("Scott Summers");
$cadastro->setEmail("cyclops@xmen.com");
$cadastro->setSenha("amoJeanGrey");

$cadastro->registrarVenda();

var_dump($cadastro);
?>