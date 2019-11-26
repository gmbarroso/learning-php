<?php
// include "./inc/exemplo1.php"; // funciona como um require em NODEJS
// require "./inc/exemplo1.php"; // funciona como um require em NODEJS
require_once "./inc/exemplo1.php";
// require_once para trazer somente uma vez o arquivo que você quer importar e não dar erro caso você repita o caminho desse arquivo.

// include é diferente de require
// require exige que o arquivo importado esteja funcionando corretamente e que ele exista
// include tenta fazer funcionar mesmo que o arquivo importado esteja com problemas - EVITAR

$resultado = somar(10, 35);

echo $resultado;
?>