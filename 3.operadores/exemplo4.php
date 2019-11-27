<?php
$a = 30;

$b = 55;

$c = 55.5;

var_dump($a > $b);
echo "<br/>";
var_dump($a < $b);
echo "<br/>";
var_dump($a = $b); // recebe, atribui valor
echo "<br/>";
var_dump($a == $b); // comparação de valor, e não de tipo
echo "<br/>";
var_dump($b == $c);
echo "<br/>";
var_dump($a === $b);
echo "<br/>";
var_dump($a != $b);
echo "<br/>";
var_dump($a !== $b);

// temos tb >= e o <=
?>