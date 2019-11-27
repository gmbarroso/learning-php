<?php
$condicao = true;

while ($condicao) {
    $numero = rand(1, 10); // rand é uma função que gera um número randomico dentro de um intervalo passado para ele.

    if ($numero === 3) {
        echo "TRÊS!!!";
        $condicao = false; // se eu não setar para false ele ficará rodando infinito
    }

    echo "{$numero} ";
}
?>