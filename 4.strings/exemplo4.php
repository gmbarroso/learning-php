<?php
$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";

$q = strpos($frase, $palavra); // função que busca a primeira ocorrência de um valor específico

$texto = substr($frase, 0, $q); // retorna parte de uma string

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // strlen traz o tamanho de uma string

echo "<br/>";

var_dump($texto2);

// documentação PHP 
// php.net/manual/pt_BR/ref.strings.php
?>