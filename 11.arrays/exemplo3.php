<?php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>"Guilherme",
    'idade'=>34
));

array_push($pessoas, array(
    'nome'=>"Marcela",
    'idade'=>30
));

print_r($pessoas[0]['nome']) // ele exib no formato estrutural do array / objeto
?>