<?php
// Tipos de dados
/* 
Numéricos, String, booleanos, arrays, objetos, resource e o null
*/

// string
$nome = "Guilherme";
$sobrenome = 'Barroso';

// numerico
$ano = 1984;
$salario = 1000.99;
$bloqueado = false;

// array
$fruta = array("abacaxi", "laranja", "manga");
echo $fruta[2]; // para escrever na tela a terceira posição.

// objeto
$nascimento = new DateTime();
// var_dump($nascimento);

// resource
$arquivo = fopen('exemplo3.php', 'r');
// var_dump($arquivo);

// null
$null = NULL;
$vazio = '';
// nulo e vazio - nulo não existe e vazio já foi iniciado e está reservado na memória

?>