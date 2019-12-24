<?php
$dt = new DateTime(); // variável, quando assim, é um objeto, não é mais uma classe. É uma instancia dessa classe.

// Em php, para acessar um método de uma classe eu cito a variável e uso ->
// no exemplo abaixo estou usando o método format da classe instanciada DateTime
echo $dt->format("d/m/Y H:i:s");
?>