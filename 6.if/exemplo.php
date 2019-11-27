<?php
$minhaIdade = 100;
$idadeCrianca = 12;
$idadeAdolescente = 18;
$idadeIdoso = 65;

// Pode escrever tanto elseif ou else if
if ($minhaIdade < $idadeCrianca) {
    echo "Criança";
} elseif ($minhaIdade < $idadeAdolescente) {
    echo "Adolescente";
} else if ($minhaIdade < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

// operador ternário e direto num echo
echo "<br/>";

echo ($minhaIdade < $idadeIdoso) ? "Menor de idade" : "Maior de idade";

?>