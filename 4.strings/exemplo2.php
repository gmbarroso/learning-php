<?php
// O PHP, assim como o JS tem as suas próprias funções.

$nome = "Guilherme Barroso";

$nome = strtoupper($nome); // transformando uma string para uppercase
echo $nome;
echo "<br>";

$nome = strtolower($nome); // transformando uma string para lowercase
echo $nome;
echo "<br>";

echo ucfirst($nome); // faz a primeira letra da string ficar maiúscula
echo "<br>";

echo ucwords($nome); // faz a primeira letra de cada palavra numa string ficar maiúscula
echo "<br>";

// OBS: reparar que eu estou sempre mudando o valor de $nome. É de bom tom alocar valores em variáveis?

?>