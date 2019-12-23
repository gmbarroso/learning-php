<?php

// session_start();
require_once("config.php");

// para apagar uma variável de seção é só colocar o session_unset ou session_destroy ou unset mesmo como uma forma mais segura
session_unset($_SESSION['nome']); // session_unset vazio já mata a seção tb

echo $_SESSION['nome']; // essa variável está sendo declarada no exemplo 1
// rodando o exemplo 2 antes do 1 dá erro pq a variável nome ainda não foi declarada

// Toda a página que eu tenho uma seção eu preciso ter um session_start()
// um session_start() pode ser configurado em um arquivo de configuração

?>