<?php
// Passagem de parametro por Valor X Referência

$a = 10;

// Valor
function trocaPorValor($a){ // lembrando que esse $a, está em outro escopo
    $a += 50;

    return $a;
};

echo $a;
echo "<br>";
echo trocaPorValor($a);
echo "<br>";

// Referencia
function trocaPorReferencia(&$a){ // quando temos um & na frente da variável, queremos que o valor atribuído,
    // substitua o valor inicial que aquela variável possuia
    $a += 110;

    return $a;
};

echo trocaPorReferencia($a);
echo "<br>";
echo $a; // o valor do $a foi alterado

?>