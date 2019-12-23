<?php

function ola() { // padrão de função no php
    // echo X return
    // echo "Olá mundo"; // é diferente de return
    return "Olá mundo";
    // o return retorna uma string
    
}

ola();
echo "<br>";
echo ola(); // quando uma função retorna um return

// com o return eu ganho liberdade para jogar o resultado em uma outra variável ou salvar em BD, etc
$frase = ola();
echo "<br>";
echo strlen($frase);
?>