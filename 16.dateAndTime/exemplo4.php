<?php
$dt = new DateTime();
$periodo = new DateInterval("P15D"); // acessar a documentação do PHP para saber o que é P15D
// no caso aqui estou querendo somar 15 dias a partir da data atual

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");
?>