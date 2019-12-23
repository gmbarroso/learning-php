<?php
// Mais um exemplo de passagem de argumento por referencia
$pessoa = array(
    'nome' => 'Guilherme', // lembrando que alocação de valor em array no php é =>
    'idade' => 34,
);

foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value += 10; // gettype é uma função do php que retorna o tipo de variavel

    echo $value.'<br>';
}

print_r($pessoa);
?>