<?php

$a = "a";

$b = "b";

// seguir boa prática de declaração de variável - camel case
$anoNascimento = 1984;

$nome = "Guilherme";

// não usar numeros com nomes

echo $a;

echo "<br/>";

unset($nome, $a); // limpando variáveis

// validação

if (isset($anoNascimento)) { // isset verifica se a variável existe
    echo $anoNascimento;
}

// concatenação
$sobrenome = "Barroso";

$nomeCompleto = $nome . " " . $sobrenome; // aspas vazias para permitir espaços no nome
// não usar + pq ele entende que isso é uma soma.

echo $nomeCompleto;

exit; // com esse exit eu paro a leitura do código nesse ponto... tudo o que vier depois não será lido

?>