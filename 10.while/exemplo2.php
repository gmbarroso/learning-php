<?php
// outra forma de aplicar o while. Faça uma coisa enquanto essa existir.
// Aqui eu quero que aplique um desconto pelo menos até chegar a 100.
$total = 200;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;

?>