<?php
$json = '[{"nome":"Guilherme","idade":34},{"nome":"Marcela","idade":30}]';

$data = json_decode($json, true); //faz o contrario do encode

var_dump($data);
?>