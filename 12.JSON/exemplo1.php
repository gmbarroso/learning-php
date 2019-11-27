<?php
// JSON - interoperabilidade dos sistemas. Substituindo o XML
$pessoas = array();

array_push($pessoas, array(
    'nome'=>"Guilherme",
    'idade'=>34
));

array_push($pessoas, array(
    'nome'=>"Marcela",
    'idade'=>30
));

echo json_encode($pessoas) // função para gerar um json a partir de um array
?>