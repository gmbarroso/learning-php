<?php

// No php as funções funcionam de forma semelhante a JS
// No entanto, na função abaixo eu tenho uma função com esperando um único argumento
// Esse argumento é obrigatório, ou seja, eu precido passar ele para que a função execute corretamente
// caso contrário receberei um erro
function ola($texto) {
    return "Olá $texto! <br>";
};

// echo ola(); // erro 500
echo ola('Guilherme');

// Eu posso também, estabelecer argumentos com valores
function padrao($texto = 'Marcela') {
    return "Olá $texto! <br>";
};

echo padrao();

// Para o caso de eu ter uma função com mais de um argumento, caso eu não queira passar um argumento
// com um valor padrão, ele se tornará obrigatório. No php, os argumntos obrigatórios devem estar ssempre
// na esquerda
function doisOuMais($texto, $periodo = "Bom dia") {
    return "$periodo, $texto! <br>";
};
// O parametro que não for obrigatorio, se vier antes, dará erro

echo doisOuMais("Benício");
?>