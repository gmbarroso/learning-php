<?php
// escopo da variável
// até onde a sua variável pode ser escutada, acessada
// escopo de função ou global, ou local

$nome = "Guilherme";

function teste() {
    global $nome; // sem o global na frente, ele não entende que eu estou querendo acessar a variável global fora do escopo da função
    echo $nome;
}

function teste2() {
    $nome = "Marcela";
    echo $nome." executando a função teste2";
}

teste(); // executando uma função em php

teste2();
?>