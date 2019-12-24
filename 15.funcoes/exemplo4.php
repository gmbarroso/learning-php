<?php

function argumentos(){

    $argumentos = func_get_args(); // é uma função do php que retorna um array de acordo com a quantidade de parametros passados.

    return $argumentos;
}

var_dump(argumentos('Olá', 19)); // Lembrando, var_dump fornece informações sobre tipos de parametros
?>